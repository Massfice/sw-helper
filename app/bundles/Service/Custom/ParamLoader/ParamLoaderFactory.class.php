<?php

namespace app\bundles\Service\Custom\ParamLoader;

use app\bundles\Service\Custom\CustomFactorySkeleton;
use app\bundles\Service\ServiceParamLoader;

class ParamLoaderFactory extends CustomFactorySkeleton {
  public function createParamLoader(string $name) : ServiceParamLoader {
    $name = '\\app\\bundles\\Service\\Custom\\ParamLoader\\'.ucfirst($name);
    return new $name();
  }
}

?>
