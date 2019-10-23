<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;

use app\init\InitRoutes;
use app\init\InitContainers;
use app\init\core\Init;
use app\routes\Routes;
use app\routes\RoutesInfo;

class MainCtrl {

  public function __construct() {
    Init::init();
    InitRoutes::init();
    InitContainers::init();
  }

  private function actionConcat() : string {
    $action = ParamUtils::getFromCleanUrl(0);

    $i = 1;
    while($buff = ParamUtils::getFromCleanUrl($i)) {
      $action = $action.'/'.$buff;
      $i++;
    }

    return $action;
  }

  public function action_start() {
    App::getSmarty()->assign('action',RoutesInfo::getRoutePath());
    App::getSmarty()->display('index.tpl');
  }

  public function action_forward() {
    $action = ParamUtils::getFromCleanUrl(1);
    Routes::getInstance()->getRoute($action)->forward();
  }

  public function action_cant() {
    Routes::getInstance()->getLogin()->forward();
  }
}

?>
