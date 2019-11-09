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
    new Route('logout','AccessCtrl',['user']);

    new Route('pleaseLogout','AccessCtrl');
    new Route('hello_guest','HelloCtrl');
    new Route('hello_user','HelloCtrl',['user']);

    new Route('setsView','SetsCtrl',['user']);
    new Route('createSet','SetsCtrl',['user']);
    new Route('modifySet','SetsCtrl',['user']);
    new Route('deleteSet','SetsCtrl',['user']);
    new Route('changeCurrentSet','SetsCtrl',['user']);

    new Route('varsView','SetsCtrl',['user']);
    new Route('createVar','SetsCtrl',['user']);
    new Route('modifyVar','SetsCtrl',['user']);
    new Route('deleteVar','SetsCtrl',['user']);
    new Route('moveVarUp','SetsCtrl',['user']);
    new Route('moveVarDown','SetsCtrl',['user']);

    new Route('generatorView','SetsCtrl',['user']);
    new Route('generatePost','SetsCtrl',['user']);

    new Route('clearCurrentSpecial','SpecialResolverCtrl',['user']);
    new Route('addTestSpecial','SpecialResolverCtrl',['user']);

    Routes::getInstance()->setDefault('hello_guest');
    Routes::getInstance()->setLogin('loginView');
    Routes::getInstance()->setLogin('pleaseLogout','loginView');
    Routes::getInstance()->setLogin('pleaseLogout','registerView');
    Routes::getInstance()->setLogin('pleaseLogout','login');
    Routes::getInstance()->setLogin('pleaseLogout','register');
  }
}

?>
