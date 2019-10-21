<?php

namespace app\routes;

class InitRoutes {
  public static function init() {
    new Route('hello','HelloCtrl');
    new Route('hello2','HelloCtrl');

    Routes::getInstance()->setDefault('hello');
    Routes::getInstance()->setLogin('hello2');
  }
}

?>
