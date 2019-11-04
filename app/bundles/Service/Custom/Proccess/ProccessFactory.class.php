<?php

namespace app\bundles\Service\Custom\Proccess;

use app\bundles\Service\Custom\CustomFactorySkeleton;
use app\bundles\Service\ServiceProccess;

class ProccessFactory extends CustomFactorySkeleton {
  public function createProccess(string $name) : ServiceProccess {
    $name = '\\app\\bundles\\Service\\Custom\\Proccess\\'.ucfirst($name);
    return new $name();
  }
}

?>
