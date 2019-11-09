<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;
use app\bundles\Form\Custom\FormFactory;
use Massfice\SessionUtils\SessionUtils;

class MoveVarUpCreator implements ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service {

    $creator = new DeleteVarCreator();
    $service = $creator->create(new ServiceCreatorTools());

    $move_proccess = $tools->getProccessFactory()->createProccess('MoveVarProccess');
    $move_proccess->setI(-1);

    $proccesses = $tools->getProccessesCollection([
      'delete_proccess' => $move_proccess
    ]);

    $service->setProccesses($proccesses);
    return $service;
  }
}

?>
