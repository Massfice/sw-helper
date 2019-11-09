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

class CreateVarProccess implements ServiceProccess {
  public function execute(?ServiceParamLoader $loader) : ?array {

    EntityFactory::create('Variable')
      ->setSetId($loader->getParam('set_id'))
      ->setName($loader->getParam('name'))
      ->setBegin($loader->getParam('begin'))
      ->setEnd($loader->getParam('end'))
      ->push();

    Routes::getInstance()->getRoute('varsView')->forward();

    return null;
  }
}

?>
