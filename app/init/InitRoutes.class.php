<?php

namespace app\init;

use app\routes\Route;
use app\routes\Routes;

class InitRoutes {
  public static function init() {
    new Route('hello','HelloCtrl');
    new Route('hello2','HelloCtrl');
    new Route('on','HelloCtrl');
    new Route('off','HelloCtrl');

    Routes::getInstance()->setDefault('hello');
    Routes::getInstance()->setLogin('hello2');
  }
}

?>
