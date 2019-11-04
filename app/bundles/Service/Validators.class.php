<?php

namespace app\bundles\Service;

class Validators {
  private $validators;

  public function __construct() {
    $this->validators = [];
  }

  public function putValidator(string $key, ServiceValidator $validator) : self {
    $this->validators[$key] = $validator;
    return $this;
  }

  public function getValidator(string $key) : ServiceValidator {
    return $this->validators[$key];
  }
}

?>
