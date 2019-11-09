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

class DeleteVarProccess implements ServiceProccess {
  public function execute(?ServiceParamLoader $loader) : ?array {

    EntityFactory::create('Variable',$loader->getParam('id'))->delete();

    Routes::getInstance()->getRoute('varsView')->forward();

    return null;
  }
}

?>
