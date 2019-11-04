<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ActionExecutor\DisplayExecutor;
use app\bundles\Service\Service;
use app\bundles\ViewResolver\ViewResolver;
use app\bundles\Form\Custom\FormFactory;

class LoginViewExecutor extends DisplayExecutor {

  protected function execute(?Service $service) {
    FormFactory::create('LoginForm')->getView()->assign('login_form');
    ViewResolver::assign('title','Logowanie');
    ViewResolver::content('container_title','container_title');
    ViewResolver::content('login_view');
  }

}

?>
