<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class EntryCtrl extends CoreCtrl{
 
        
    public function action_registry(){
        //App::getSmarty()->assign("value",$variable);        
        App::getSmarty()->display("entry.tpl");
    }
}
