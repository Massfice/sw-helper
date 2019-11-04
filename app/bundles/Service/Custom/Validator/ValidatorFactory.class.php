<?php

namespace app\bundles\Service\Custom\Validator;

use app\bundles\Service\Custom\CustomFactorySkeleton;
use app\bundles\Service\ServiceValidator;

class ValidatorFactory extends CustomFactorySkeleton {
  public function createValidator(string $name) : ServiceValidator {
    $name = '\\app\\bundles\\Service\\Custom\\Validator\\'.ucfirst($name);
    return new $name();
  }
}

?>
