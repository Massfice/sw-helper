<?php

namespace app\bundles\Service\Custom\Validator;

use app\bundles\Service\ServiceParamLoader;
use app\bundles\Service\ServiceValidator;

class TestValidator2 implements ServiceValidator {
  public function validate(?ServiceParamLoader $loader) : bool {
    return $loader->getParam() < 15;
  }
}

?>
