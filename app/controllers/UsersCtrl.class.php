<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;

class UsersCtrl extends CoreCtrl{
    public function action_users()
    {
        $this->validate();

        $db = App::getDB();
        $users = $db->select("users", "*", []);
        $roles = $db->select("roles", "*", []);

        App::getSmarty()->assign("users", $users);
        App::getSmarty()->assign("roles", $roles);
        App::getSmarty()->display("users.tpl");

    }

    public function action_updateUser()
    {
        $this->validate();

        $post = $_POST;
        $data = [
            "email" => $post['email'],
            "role_id" => $post['role'],
        ];

        if (!empty($post['password'])) {
            $data[] = $post['password'];
        }

        $db = App::getDB();
        $db->update("users", $data, ["id" => $post['user_id']]);
        header("Location: /Projekt/public/users/");

    }

    private function validate()
    {
        if ($this->user->role_id != "1") {
            http_response_code(403);
            exit;
        }
    }
}