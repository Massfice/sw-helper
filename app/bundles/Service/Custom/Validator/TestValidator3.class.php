<?php

namespace app\bundles\Service\Custom\Validator;

use app\bundles\Service\ServiceParamLoader;
use app\bundles\Service\ServiceValidator;

class TestValidator3 implements ServiceValidator {
  public function validate(?ServiceParamLoader $loader) : bool {
    return $loader->getParam() < 20;
  }
}

?>
