<?php

namespace app\bundles\Service;

abstract class ServiceSkeleton {

  protected $loaders;
  protected $validators;
  protected $proccesses;
  protected $logic;

  public function setParamLoaders(?ParamLoaders $loaders) : self {
    $this->loaders = $loaders;
    return $this;
  }

  public function setValidators(?Validators $validators) : self {
    $this->validators = $validators;
    return $this;
  }

  public function setProccesses(Proccesses $proccesses) : self {
    $this->proccesses = $proccesses;
    return $this;
  }

  public function setLogic(ServiceLogic $logic) : self {
    $this->logic = $logic;
    return $this;
  }

  public function getParamLoaders() : ?ParamLoaders {
    return $this->loaders;
  }

  public function getValidators() : ?Validators {
    return $this->validators;
  }

  public function getProccesses() : Proccesses {
    return $this->proccesses;
  }

  public function getLogic() : ServiceLogic {
    return $this->logic;
  }
}

?>
