<?php

namespace app\bundles\Service\Custom\Proccess;

use app\bundles\Service\ServiceProccess;
use app\bundles\Service\ServiceParamLoader;
use app\bundles\Entity\Custom\EntityFactory;
use app\routes\Routes;
use Massfice\SessionUtils\SessionUtils;
use core\RoleUtils;
use app\bundles\ViewResolver\ViewResolver;
use app\controllers\SetsCtrl;

class ModifySetProccess implements ServiceProccess {
  public function execute(?ServiceParamLoader $loader) : ?array {

    EntityFactory::create('Set',$loader->getParam('id'))
      ->setName($loader->getParam('name'))
      ->push();

    SetsCtrl::refresh();
    
    Routes::getInstance()->getRoute('setsView')->forward();

    return null;
  }
}

?>
