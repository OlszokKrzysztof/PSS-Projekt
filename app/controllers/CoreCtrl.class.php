<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;


abstract class CoreCtrl {
    protected $user;
    public function __construct() {
        $this->user = SessionUtils::loadData("user",true);
        App::getSmarty()->assign("user", $this-> user);
        $db = App::getDB();
            $categories = $db->select("categories", "*", []);
        App::getSmarty()->assign("categories",$categories);

    }
}
