<?php

namespace app\bundles\Service\Custom\ParamLoader;

use app\bundles\Service\ServiceParamLoader;

class TransferLoader implements ServiceParamLoader {

  private $params;

  public function __construct() {
    $this->params = [];
  }

  public function setParam(string $key, $param) : self {
    $this->params[$key] = $param;
    return $this;
  }

  public function getParam(?string $key) {
    return $this->params[$key];
  }

}


?>
