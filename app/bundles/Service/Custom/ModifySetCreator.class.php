<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;
use app\bundles\Form\Custom\FormFactory;
use Massfice\SessionUtils\SessionUtils;

class ModifySetCreator implements ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service {
    $logic = $tools->getLogicFactory()->createLogic('ModifySetLogic');

    $form_data = FormFactory::create('AllSetsForm')->getData();
    $data_loader = $tools->getParamLoaderFactory()
      ->createParamLoader('TransferLoader')
      ->setParam('name',$form_data->getParam('name'))
      ->setParam('user_id',SessionUtils::load('user')->getId())
      ->setParam('id',$form_data->getParam('id'));

    $name_not_empty_validator = $tools->getValidatorFactory()->createValidator('NoEmptyFieldValidator');
    $name_not_empty_validator->setKey('name');

    $set_exist_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $set_exist_validator->setTable('set_table')->setWhere([
      'name' => 'name',
      'user_id' => 'user_id'
    ]);

    $valid_set_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $valid_set_validator->setTable('set_table')->setWhere([
      'id' => 'id',
      'user_id' => 'user_id'
    ]);

    $modify_proccess = $tools->getProccessFactory()->createProccess('ModifySetProccess');

    $proccesses = $tools->getProccessesCollection([
      'modify_proccess' => $modify_proccess
    ]);

    $loaders = $tools->getParamLoadersCollection([
      'data_loader' => $data_loader
    ]);

    $validators = $tools->getValidatorsCollection([
      'set_exist_validator' => $set_exist_validator,
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
