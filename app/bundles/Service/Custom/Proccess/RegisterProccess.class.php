<?php

namespace app\bundles\Service\Custom\Proccess;

use app\bundles\Service\ServiceProccess;
use app\bundles\Service\ServiceParamLoader;
use app\bundles\ViewResolver\ViewResolver;
use app\bundles\Entity\Custom\EntityFactory;

class RegisterProccess implements ServiceProccess {
  public function execute(?ServiceParamLoader $loader) : ?array {

    $user = EntityFactory::create('User');

    $user
      ->setLogin($loader->getParam('login'))
      ->setPassword($loader->getParam('password'))
      ->push();

    ViewResolver::content('register_success');

    return null;
  }
}

?>
