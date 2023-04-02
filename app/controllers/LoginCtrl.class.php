<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;

class LoginCtrl extends CoreCtrl{
    
    public function action_form() {
       
        if(!empty($_POST)){
            $this->login();
        }

        $user = SessionUtils::loadData("user", true);
        if ($user){
            header("Location: /Projekt/public");
            exit();
        }

        App::getSmarty()->display("LoginForm.tpl");
        
    }
   
    public function action_register() {
       
        if(!empty($_POST)){
            $this->register();
        }

        $user = SessionUtils::loadData("user", true);
        if ($user){
            header("Location: /Projekt/public");
            exit();
        }

        App::getSmarty()->display("RegisterForm.tpl");
        
    }
    
    private function register(){
        $email = $_POST["email"];
        $pwd = $_POST["password"];
        $db = App::getDB();
        $user = $db->select("users", "*", ["email"=>$email]);
    
        if (!isset($user[0])){
           $db->insert("users",["email"=>$email,"password"=>$pwd, "role_id"=>2]);
        }
    }

    private function login(){
        $email = $_POST["email"];
        $pwd = $_POST["password"];
        $db = App::getDB();
        $user = $db->select("users", "*", ["email"=>$email]);
    
        if (isset($user[0])){
           if ($user[0]["password"] == $pwd){
                SessionUtils::storeData("user", $user[0]);
           }
        }
    }

    public function action_logout(){
        SessionUtils::remove("user");
        header("Location: /Projekt/public");
        exit();
    }
}
