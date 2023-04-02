<?php

use core\App;
use core\Utils;

//App::getRouter()->setDefaultRoute('home'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('form', 'LoginCtrl');
Utils::addRoute('home', 'CategoryCtrl');
Utils::addRoute('register', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('category', 'CategoryCtrl');
Utils::addRoute('post', 'CategoryCtrl');
Utils::addRoute('addComment', 'CategoryCtrl');
Utils::addRoute('users', 'UsersCtrl');
Utils::addRoute('updateUser', 'UsersCtrl');
Utils::addRoute('postMgmt', 'CategoryCtrl');
Utils::addRoute('editPost', 'CategoryCtrl');
Utils::addRoute('removePost', 'CategoryCtrl');
Utils::addRoute('removeUser', 'CategoryCtrl');
Utils::addRoute('removeComment', 'CategoryCtrl');
Utils::addRoute('addPost', 'CategoryCtrl');







//Utils::addRoute('action_name', 'controller_class_name');