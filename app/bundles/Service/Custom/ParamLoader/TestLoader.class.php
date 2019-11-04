<?php

namespace app\bundles\Service\Custom\ParamLoader;

use app\bundles\Service\ServiceParamLoader;

class TestLoader implements ServiceParamLoader {
  public function getParam(?string $key = null) {
    return 21;
  }
}

?>
