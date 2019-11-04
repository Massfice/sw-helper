<?php

namespace app\bundles\Service\Custom\Validator;

use app\bundles\Service\ServiceParamLoader;
use app\bundles\Service\ServiceValidator;

class IsEqualValidator implements ServiceValidator {

  private $key1;
  private $key2;

  public function __construct() {
    $this->key1 = 'one';
    $this->key2 = 'two';
  }

  public function validate(?ServiceParamLoader $loader) : bool {
    $param1 = $loader->getParam($this->key1);
    $param2 = $loader->getParam($this->key2);
    if(!isset($param1)) return false;
    if(!isset($param2)) return false;

    return $param1 == $param2;
  }

  public function setKeyOne(string $key) : self {
    $this->key1 = $key;
    return $this;
  }

  public function setKeyTwo(string $key) : self {
    $this->key2 = $key;
    return $this;
  }
}

?>
