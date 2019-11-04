<?php

namespace app\init;

use app\routes\Route;
use app\routes\Routes;

class InitRoutes {
  public static function init() {
    new Route('loginView','AccessCtrl',['guest']);
    new Route('registerView','AccessCtrl',['guest']);
    new Route('register','AccessCtrl',['guest']);
    new Route('login','AccessCtrl',['guest']);
    new Route('pleaseLogout','AccessCtrl');
    new Route('hello_guest','HelloCtrl');
    new Route('hello_user','HelloCtrl',['user']);
    new Route('logout','AccessCtrl',['user']);

    Routes::getInstance()->setDefault('hello_guest');
    Routes::getInstance()->setLogin('loginView');
    Routes::getInstance()->setLogin('pleaseLogout','loginView');
    Routes::getInstance()->setLogin('pleaseLogout','registerView');
    Routes::getInstance()->setLogin('pleaseLogout','login');
    Routes::getInstance()->setLogin('pleaseLogout','register');
  }
}

?>
