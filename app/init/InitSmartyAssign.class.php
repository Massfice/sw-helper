<?php

namespace app\init;

use app\bundles\ViewResolver\ViewResolver;
use Massfice\SessionUtils\SessionUtils;

class InitSmartyAssign {

  public static function refresh() {
    ViewResolver::assign('user',SessionUtils::load('user'),true);
  }

  public static function init() {
    //Zapisywanie do smartów, nie używać zmiennych: 'form' i 'input'ś

    self::refresh();
  }
}

?>
