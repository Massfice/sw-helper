<?php

namespace app\bundles\Service\Custom\Proccess;

use app\bundles\Service\ServiceProccess;
use app\bundles\Service\ServiceParamLoader;
use app\bundles\Entity\Custom\EntityFactory;
use app\routes\Routes;
use Massfice\SessionUtils\SessionUtils;
use core\RoleUtils;
use app\bundles\ViewResolver\ViewResolver;

class LoginProccess implements ServiceProccess {
  public function execute(?ServiceParamLoader $loader) : ?array {

    $user = EntityFactory::create('User',[
      'login' => $loader->getParam('login'),
      'password' => $loader->getParam('password')
    ]);

    SessionUtils::store('user',$user);
    RoleUtils::addRole('user');
    RoleUtils::removeRole('guest');

    ViewResolver::refresh('main');

    Routes::getInstance()->getRoute('hello_user')->forward();

    return null;
  }
}

?>
