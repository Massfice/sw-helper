<?php

namespace app\controllers;

use app\bundles\ActionExecutor\Custom\ActionExecutorFactory;
use app\bundles\Service\Custom\ServiceFactory;
use app\bundles\ViewResolver\ViewResolver;
use Massfice\SessionUtils\SessionUtils;
use core\RoleUtils;
use app\routes\Routes;
use app\SWHelperFeatures\PostGenerator\SpecialResolver;

class AccessCtrl {

  public function action_loginView() {
    ActionExecutorFactory::create('LoginViewExecutor')->setContainer('access')->action();
  }

  public function action_registerView() {
    ActionExecutorFactory::create('RegisterViewExecutor')->setContainer('access')->action();
  }

  public function action_register() {
    $service = ServiceFactory::create('Register');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('access')->action($service);
  }

  public function action_login() {
    $service = ServiceFactory::create('Login');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('access')->action($service);
  }

  public function action_pleaseLogout() {
    ActionExecutorFactory::create('PleaseLogoutExecutor')->action();
  }

  public function action_logout() {
    RoleUtils::removeRole('user');
    RoleUtils::addRole('guest');
    SessionUtils::unset('user');
    SessionUtils::unset('current_set');
    SpecialResolver::clear();
    ViewResolver::refresh('main');
    Routes::getInstance()->getRoute('loginView')->forward();
  }
}

?>
