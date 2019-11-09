<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;
use app\bundles\Form\Custom\FormFactory;
use Massfice\SessionUtils\SessionUtils;

class DeleteVarCreator implements ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service {
    $logic = $tools->getLogicFactory()->createLogic('DeleteVarLogic');

    $form_data = FormFactory::create('AllVarsForm')->getData();
    $data_loader = $tools->getParamLoaderFactory()
      ->createParamLoader('TransferLoader')
      ->setParam('set_id',SessionUtils::load('current_set'))
      ->setParam('user_id',SessionUtils::load('user')->getId())
      ->setParam('id',$form_data->getParam('id'));

    $valid_set_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $valid_set_validator->setTable('set_table')->setWhere([
      'id' => 'set_id',
      'user_id' => 'user_id'
    ]);

    $valid_var_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $valid_var_validator->setTable('variable_table')->setWhere([
      'id' => 'id',
      'set_id' => 'set_id'
    ]);

    $delete_proccess = $tools->getProccessFactory()->createProccess('DeleteVarProccess');

    $proccesses = $tools->getProccessesCollection([
      'delete_proccess' => $delete_proccess
    ]);

    $loaders = $tools->getParamLoadersCollection([
      'data_loader' => $data_loader
    ]);

    $validators = $tools->getValidatorsCollection([
      'valid_set_validator' => $valid_set_validator,
      'valid_var_validator' => $valid_var_validator
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
