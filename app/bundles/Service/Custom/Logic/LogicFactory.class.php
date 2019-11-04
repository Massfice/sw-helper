<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\Custom\CustomFactorySkeleton;
use app\bundles\Service\ServiceLogic;

class LogicFactory extends CustomFactorySkeleton {
  public function createLogic(string $name) : ServiceLogic {
    $name = '\\app\\bundles\\Service\\Custom\\Logic\\'.ucfirst($name);
    return new $name();
  }
}

?>
