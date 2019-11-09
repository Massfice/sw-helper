<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;

use app\init\InitRoutes;
use app\init\InitContainers;
use app\init\InitSmartyAssign;
use app\init\EntityManagerInit;
use app\init\ForwardInit;
use app\init\InitCustom;
use app\init\core\Init;
use app\routes\Routes;
use app\routes\RoutesInfo;

class MainCtrl {

  public function __construct() {
    Init::getInstance()->init();
    InitRoutes::init();
    InitContainers::init();
    InitSmartyAssign::init();
    EntityManagerInit::init();
    InitCustom::init();
  }

  public function action_start() {
    App::getSmarty()->assign('action',RoutesInfo::getRoutePath());
    App::getSmarty()->display('index.tpl');
  }

  public function action_forward() {
    ForwardInit::init();
    $action = RoutesInfo::getAction();
    Routes::getInstance()->getRoute($action)->forward();
  }

  public function action_cant() {
    $action = RoutesInfo::getAction();
    Routes::getInstance()->getLogin($action)->forward();
  }
}

?>
