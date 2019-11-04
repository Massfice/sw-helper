<?php

namespace app\init;

use app\bundles\ViewResolver\ViewResolver;
use core\RoleUtils;
use core\App;

class ForwardInit {
  public static function init() {
    if(count(App::getConf()->roles) == 0) RoleUtils::addRole('guest');
    ViewResolver::content('blank','errors');
  }
}

?>
