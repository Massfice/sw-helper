<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;
use app\bundles\Form\Custom\FormFactory;
use Massfice\SessionUtils\SessionUtils;

class ChangeCurrentSetCreator implements ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service {
    $logic = $tools->getLogicFactory()->createLogic('ChangeCurrentSetLogic');

    $form_data = FormFactory::create('SetsListForm')->getData();
    $data_loader = $tools->getParamLoaderFactory()
      ->createParamLoader('TransferLoader')
      ->setParam('set_id',$form_data->getParam('set_id'))
      ->setParam('user_id',SessionUtils::load('user')->getId());

    $set_exist_validator = $tools->getValidatorFactory()->createValidator('DBHasValidator');
    $set_exist_validator->setTable('set_table')->setWhere([
      'id' => 'set_id',
      'user_id' => 'user_id'
    ]);

    $change_proccess = $tools->getProccessFactory()->createProccess('ChangeCurrentSetProccess');

    $proccesses = $tools->getProccessesCollection([
      'change_proccess' => $change_proccess
    ]);

    $loaders = $tools->getParamLoadersCollection([
      'data_loader' => $data_loader
    ]);

    $validators = $tools->getValidatorsCollection([
      'set_exist_validator' => $set_exist_validator
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
