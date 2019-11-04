<?php

namespace app\bundles\Service;

class Proccesses {
  private $proccesses;

  public function __construct() {
    $this->proccesses = [];
  }

  public function putProccess(string $key, ServiceProccess $proccess) : self {
    $this->proccesses[$key] = $proccess;
    return $this;
  }

  public function getProccess(string $key) : ServiceProccess {
    return $this->proccesses[$key];
  }
}

?>
