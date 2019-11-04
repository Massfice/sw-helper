<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;
use app\bundles\Form\Custom\FormFactory;

class RegisterCreator implements ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service {

    $logic = $tools->getLogicFactory()->createLogic('RegisterLogic');

    $user_data_loader = FormFactory::create('RegisterForm')->getData();

    $user_exist_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $user_exist_validator->setTable('user_table')->setWhere([
      'login' => 'login'
    ]);

    $pass_equals_validator = $tools->getValidatorFactory()->createValidator('IsEqualValidator');
    $pass_equals_validator->setKeyOne('password')->setKeyTwo('repassword');

    $login_not_empty_validator = $tools->getValidatorFactory()->createValidator('NoEmptyFieldValidator');
    $login_not_empty_validator->setKey('login');

    $password_not_empty_validator = $tools->getValidatorFactory()->createValidator('NoEmptyFieldValidator');
    $password_not_empty_validator->setKey('password');

    $repassword_not_empty_validator = $tools->getValidatorFactory()->createValidator('NoEmptyFieldValidator');
    $repassword_not_empty_validator->setKey('repassword');

    $register_proccess = $tools->getProccessFactory()->createProccess('RegisterProccess');

    $proccesses = $tools->getProccessesCollection([
      'register_proccess' => $register_proccess
    ]);
    $loaders = $tools->getParamLoadersCollection([
      'user_data_loader' => $user_data_loader
    ]);
    $validators = $tools->getValidatorsCollection([
      'pass_equals_validator' => $pass_equals_validator,
      'user_exist_validator' => $user_exist_validator,
      'login_not_empty_validator' => $login_not_empty_validator,
      'password_not_empty_validator' => $password_not_empty_validator,
      'repassword_not_empty_validator' => $repassword_not_empty_validator
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
