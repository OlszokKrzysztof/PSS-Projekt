<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class CategoryCtrl extends CoreCtrl{
 
    public function action_category($params){
        $id = isset($params[1]) ? $params[1] : false;
        if($id){
            $db = App::getDB();
            $categories = $db->select("categories", "*", ["id"=>$id]);
            App::getSmarty()->assign("category",$categories[0]);
            $pageOffset=($_GET["page"] ?? 1) * 2 -2;
            $search=$_GET["search"] ?? "";
            $posts = $db->select("posts", "*", ["category_id"=>$id, "LIMIT"=>[$pageOffset,2], "title[~]"=>"%{$search}%"]);
            $postsCounter = $db->count("posts", "*", ["category_id"=>$id, "title[~]"=>"%{$search}%"]);
            App::getSmarty()->assign("posts",$posts);
            App::getSmarty()->assign("postsCounter",$postsCounter);
            App::getSmarty()->assign("search",$search);


        }
                
         App::getSmarty()->display("category.tpl");
     }

     public function action_post($params){
        $id = isset($params[1]) ? $params[1] : false;
        if($id){
            $db = App::getDB();
            $post = $db->select("posts", "*", ["id"=>$id]);
            $comments=$db->select("comments",["[>]users"=>["user_id"=>"id"]],["comments.content","users.email","comments.id"],["post_id"=>$id]);
            $stars=$db->select("stars","*",["post_id"=>$id]);
            $count=0;
            $number=count($stars);
            foreach ($stars as $star){
                $count += $star ["stars"];
            }
            if ($number>0){
                $count = $count/$number;
            }
            App::getSmarty()->assign("star",$count);
            App::getSmarty()->assign("post",$post[0]);
            App::getSmarty()->assign("comments",$comments);

        }
                
         App::getSmarty()->display("post.tpl");
     }

    public function action_home(){
        $db = App::getDB();
        $posts = $db->select("posts", ["[>]categories"=>["category_id"=>"id"]],["posts.title","posts.id","posts.description","categories.name","posts.created_at"], []);
            App::getSmarty()->assign("post_one",$posts[0]);
            App::getSmarty()->assign("post_two",$posts[1]);
            App::getSmarty()->assign("post_three",$posts[2]);
            unset($posts[0], $posts[1], $posts[2]);
            App::getSmarty()->assign("posts",$posts);

       
        //$posts = $db->select("posts", "*", []);
        //App::getSmarty()->assign("posts",$posts);        
        App::getSmarty()->display("home.tpl");
        
    }

    public function action_addComment(){
        $post = $_POST;

        $db = App::getDB();
        $data = [
            "user_id"=>$this->user->id,
            "post_id"=>$post["post_id"],
            "content"=>$post["content"],
        ];
        $data2 = [
            "user_id"=>$this->user->id,
            "post_id"=>$post["post_id"],
            "stars"=>$post["opinion"],
        ];
        $db->insert("stars",$data2);
        $db->insert("comments",$data);
        header("Location: /Projekt/public/post/".$post["post_id"]);
    }
 
    public function action_postMgmt($params){
        if(!$this->canEditPages()){
            http_response_code(403);
            exit;
        }
            $db = App::getDB();
            $posts = $db->select("posts", "*", []);
           
            App::getSmarty()->assign("posts",$posts);

        
                
         App::getSmarty()->display("postMgmt.tpl");
     }

     public function action_removePost($params){
        if(!$this->canEditPages()){
            http_response_code(403);
            exit;
        }
        $id = isset($params[1]) ? $params[1] : false;
        if ($id){

            $db = App::getDB();
            $db->delete("posts",["id"=>$id]);
            header("Location: /Projekt/public/postMgmt/");
        }
     }

     public function action_editPost($params){
        if(!$this->canEditPages()){
            http_response_code(403);
            exit;
        }
        $id = isset($params[1]) ? $params[1] : false;
        if($id){
            $post=$_POST;
            $db = App::getDB();
            if(!empty($post)){
                $db->update("posts",["title"=>$post["title"],"description"=>$post["description"]],["id"=>$id]);
            }
            $db = App::getDB();
            $post = $db->select("posts", "*", ["id"=>$id]);
            App::getSmarty()->assign("post",$post[0]);
        }
                
         App::getSmarty()->display("editPost.tpl");
    }

    public function canEditPages(){
        if ($this->user->role_id != "3") {
            return false;
        }
        return true;
    }

    public function action_removeUser($params){
        if($this->user->role_id != "1"){
            http_response_code(403);
            exit;
        }
        $id = isset($params[1]) ? $params[1] : false;
        if ($id){
            
            $db = App::getDB();
            $db->delete("users",["id"=>$id]);
            header("Location: /Projekt/public/users/");
        }
     }

     public function action_removeComment($params){
        if(!$this->canEditPages()){
            http_response_code(403);
            exit;
        }
        $id = isset($params[1]) ? $params[1] : false;
        if ($id){

            $db = App::getDB();
            $comment=$db->select("comments", "*",["id"=>$id]);

            $db->delete("comments",["id"=>$id]);
            header("Location: /Projekt/public/post/".$comment[0]["post_id"]);
        }
     }

     public function action_addPost(){
        $db = App::getDB();
        $post = $_POST;
        if (empty($post)){
            $categories = $db->select("categories","*",[]);
            App::getSmarty()->assign("categories",$categories);
            App::getSmarty()->display("addPost.tpl");

        }else{
             $db->insert("posts",["title"=>$_POST["title"],"description"=>$_POST["description"],"category_id"=>$_POST["category"]]); 
             header("Location: /Projekt/public/home/");  
        }
       
    }

    public function action_ajax(){
        $db = App::getDB();
        $input=$_POST["input"];
        $postsCounter = $db->count("posts", "*", ["title"=>$input]);
        if($postsCounter > 0){
            echo json_encode([
                "message" => "Post name already exists"
            ]);
        }else{
            echo json_encode([
                "message" => "Post name available"
            ]);
        }
    }
}


