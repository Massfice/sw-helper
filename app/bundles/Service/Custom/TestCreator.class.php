<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;

class TestCreator implements ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service {
    $logic = $tools->getLogicFactory()->createLogic('TestLogic');
    $loader = $tools->getParamLoaderFactory()->createParamLoader('TestLoader');
    $validator1 = $tools->getValidatorFactory()->createValidator('TestValidator1');
    $validator2 = $tools->getValidatorFactory()->createValidator('TestValidator2');
    $validator3 = $tools->getValidatorFactory()->createValidator('TestValidator3');
    $proccess = $tools->getProccessFactory()->createProccess('TestProccess');
    $proccesses = $tools->getProccessesCollection([
      'test' => $proccess
    ]);
    $loaders = $tools->getParamLoadersCollection([
      'loader' => $loader
    ]);
    $validators = $tools->getValidatorsCollection([
      'validator1' => $validator1,
      'validator2' => $validator2,
      'validator3' => $validator3
    ]);

    $service = $tools
      ->getBuilder()
      ->setProccesses($proccesses)
      ->setLogic($logic)
      ->setParamLoaders($loaders)
      ->setValidators($validators)
      ->build();

    return $service;
  }
}

?>
