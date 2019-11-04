<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ActionExecutor\DisplayExecutor;
use app\bundles\Service\Service;
use app\bundles\ViewResolver\ViewResolver;
use app\bundles\Form\Custom\FormFactory;

class RegisterViewExecutor extends DisplayExecutor {

  protected function execute(?Service $service) {
    FormFactory::create('RegisterForm')->getView()->assign('register_form');
    ViewResolver::assign('title','Rejestracja');
    ViewResolver::content('container_title','container_title');
    ViewResolver::content('register_view');
  }

}

?>
