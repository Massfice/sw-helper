<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;
use app\bundles\Form\Custom\FormFactory;
use Massfice\SessionUtils\SessionUtils;

class CreateVarCreator implements ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service {
    $logic = $tools->getLogicFactory()->createLogic('CreateVarLogic');

    $form_data = FormFactory::create('VarsForm')->getData();
    $data_loader = $tools->getParamLoaderFactory()
      ->createParamLoader('TransferLoader')
      ->setParam('name',$form_data->getParam('name'))
      ->setParam('set_id',SessionUtils::load('current_set'))
      ->setParam('begin',$form_data->getParam('begin'))
      ->setParam('end',$form_data->getParam('end'))
      ->setParam('user_id',SessionUtils::load('user')->getId());

    $name_not_empty_validator = $tools->getValidatorFactory()->createValidator('NoEmptyFieldValidator');
    $name_not_empty_validator->setKey('name');

    $valid_set_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $valid_set_validator->setTable('set_table')->setWhere([
      'id' => 'set_id',
      'user_id' => 'user_id'
    ]);

    $var_exist_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $var_exist_validator->setTable('variable_table')->setWhere([
      'set_id' => 'set_id',
      'name' => 'name'
    ]);

    $create_proccess = $tools->getProccessFactory()->createProccess('CreateVarProccess');

    $proccesses = $tools->getProccessesCollection([
      'create_proccess' => $create_proccess
    ]);

    $loaders = $tools->getParamLoadersCollection([
      'data_loader' => $data_loader
    ]);

    $validators = $tools->getValidatorsCollection([
      'var_exist_validator' => $var_exist_validator,
      'name_not_empty_validator' => $name_not_empty_validator,
      'valid_set_validator' => $valid_set_validator
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
