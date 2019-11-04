<?php

namespace app\bundles\Service\Custom\Proccess;

use app\bundles\Service\ServiceProccess;
use app\bundles\Service\ServiceParamLoader;

class TestProccess implements ServiceProccess {
  public function execute(?ServiceParamLoader $loader) : ?array {
    return [2];
  }
}

?>
