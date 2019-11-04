<?php

namespace app\init;

use app\bundles\ViewResolver\ContainersHierarchy;

class InitContainers {
  public static function init() {
    ContainersHierarchy::getInstance()->setHierarchy([
      'main' => [
        'access'
      ]
    ]);
  }
}

?>
