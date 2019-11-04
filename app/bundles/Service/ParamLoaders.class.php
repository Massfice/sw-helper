<?php

namespace app\bundles\Service;

class ParamLoaders {

  private $loaders;

  public function __construct() {
    $this->loaders = [];
  }

  public function putParamLoader(string $key, ServiceParamLoader $loader) : self {
    $this->loaders[$key] = $loader;
    return $this;
  }

  public function getParamLoader(string $key) : ServiceParamLoader {
    return $this->loaders[$key];
  }
}

?>
