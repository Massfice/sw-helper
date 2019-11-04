<?php

namespace app\bundles\Service;

class Service extends ServiceSkeleton {
  public function __construct(ServiceBuilder $builder) {
    $loaders = $builder->getParamLoaders();
    $validators = $builder->getValidators();
    $proccesses = $builder->getProccesses();
    $logic = $builder->getLogic();

    $this->setParamLoaders($loaders);
    $this->setValidators($validators);
    $this->setProccesses($proccesses);
    $this->setLogic($logic);
  }

  public function execute() : ?array {

    if(isset($this->loaders)) {
      $loaders = $this->loaders;
    } else {
      $loaders = new ParamLoaders();
      $loaders->putParamLoader('loader', new class() implements ServiceParamLoader {
        public function getParam(string $key) {
          return null;
        }
      });
    }

    if(isset($this->validators)) {
      $validators = $this->validators;
    } else {
      $validators = new Validators();
      $validators->putValidator('validator', new class implements ServiceValidator {
        public function validate(ServiceParamLoader $loader) : bool {
          return true;
        }
      });
    }

    $proccesses = $this->proccesses;

    return $this->logic->execute($loaders,$validators,$proccesses);
  }
}

?>
