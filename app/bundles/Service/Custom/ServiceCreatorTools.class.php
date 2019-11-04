<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\ServiceBuilder;
use app\bundles\Service\Custom\ParamLoader\ParamLoaderFactory;
use app\bundles\Service\Custom\Validator\ValidatorFactory;
use app\bundles\Service\Custom\Proccess\ProccessFactory;
use app\bundles\Service\Custom\Logic\LogicFactory;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\Service\ServiceParamLoader;
use app\bundles\Service\ServiceValidator;
use app\bundles\Service\ServiceProccess;

class ServiceCreatorTools {

  private $builder;
  private $param_loader_factory;
  private $validator_factory;
  private $proccess_factory;
  private $logic_factory;
  private $param_loaders_collection;
  private $validators_collection;
  private $proccesses_collection;

  public function __construct() {
    $this->builder = ServiceBuilder::getBuilder();
    $this->param_loader_factory = ParamLoaderFactory::getFactory();
    $this->validator_factory = ValidatorFactory::getFactory();
    $this->proccess_factory = ProccessFactory::getFactory();
    $this->logic_factory = LogicFactory::getFactory();
    $this->param_loaders_collection = new ParamLoaders;
    $this->validators_collection = new Validators();
    $this->proccesses_collection = new Proccesses();
  }

  public function getBuilder() : ServiceBuilder {
    return $this->builder;
  }

  public function getParamLoaderFactory() : ParamLoaderFactory {
    return $this->param_loader_factory;
  }

  public function getValidatorFactory() : ValidatorFactory {
    return $this->validator_factory;
  }

  public function getProccessFactory() : ProccessFactory {
    return $this->proccess_factory;
  }

  public function getLogicFactory() : LogicFactory {
    return $this->logic_factory;
  }

  public function getParamLoadersCollection(array $loaders = []) : ParamLoaders {
    foreach($loaders as $k => $l) {
      $this->param_loaders_collection->putParamLoader($k,$l);
    }
    return $this->param_loaders_collection;
  }

  public function getValidatorsCollection(array $validators = []) : Validators {
    foreach($validators as $k =>  $v) {
      $this->validators_collection->putValidator($k,$v);
    }
    return $this->validators_collection;
  }

  public function getProccessesCollection(array $proccesses = []) : Proccesses {
    foreach($proccesses as $k =>  $p) {
      $this->proccesses_collection->putProccess($k,$p);
    }
    return $this->proccesses_collection;
  }

}

?>
