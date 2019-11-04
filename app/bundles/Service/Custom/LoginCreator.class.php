<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;
use app\bundles\Form\Custom\FormFactory;

class LoginCreator implements ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service {
    $logic = $tools->getLogicFactory()->createLogic('LoginLogic');

    $user_data_loader = FormFactory::create('LoginForm')->getData();

    $login_not_empty_validator = $tools->getValidatorFactory()->createValidator('NoEmptyFieldValidator');
    $login_not_empty_validator->setKey('login');

    $password_not_empty_validator = $tools->getValidatorFactory()->createValidator('NoEmptyFieldValidator');
    $password_not_empty_validator->setKey('password');

    $user_exist_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $user_exist_validator->setTable('user_table')->setWhere([
      'login' => 'login',
      'password' => 'password.sha1'
    ]);

    $login_proccess = $tools->getProccessFactory()->createProccess('LoginProccess');

    $proccesses = $tools->getProccessesCollection([
      'login_proccess' => $login_proccess
    ]);

    $loaders = $tools->getParamLoadersCollection([
      'user_data_loader' => $user_data_loader
    ]);

    $validators = $tools->getValidatorsCollection([
      'user_exist_validator' => $user_exist_validator,
      'login_not_empty_validator' => $login_not_empty_validator,
      'password_not_empty_validator' => $password_not_empty_validator,
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
