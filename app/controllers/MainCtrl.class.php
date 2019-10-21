<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;

use app\init\InitRoutes;
use app\routes\Routes;
use app\routes\Forward;

class MainCtrl {

  public function __construct() {
    InitRoutes::init();
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
    App::getSmarty()->assign('action',$this->actionConcat());
    App::getSmarty()->display('core/index.tpl');
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
