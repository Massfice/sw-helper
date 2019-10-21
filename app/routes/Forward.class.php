<?php

namespace app\routes;

use core\App;
use core\Utils;

class Forward {
  public static function to(Route $route) {
    Utils::addRoute($route->getAction(),$route->getController(),$route->getRoles());
    App::getRouter()->forwardTo($route->getAction());
  }
}

?>
