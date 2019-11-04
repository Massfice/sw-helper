<?php

namespace app\bundles\Service\Custom\Validator;

use app\bundles\Service\ServiceParamLoader;
use app\bundles\Service\ServiceValidator;

class NoEmptyFieldValidator implements ServiceValidator {

  private $key;

  public function __construct() {
    $this->key = 'key';
  }

  public function setKey(string $key) {
    $this->key = $key;
  }

  public function validate(?ServiceParamLoader $loader) : bool {
    $param = $loader->getParam($this->key);
    return isset($param) && !empty($param);
  }
}

?>
