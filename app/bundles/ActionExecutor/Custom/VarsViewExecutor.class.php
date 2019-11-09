<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ActionExecutor\DisplayExecutor;
use app\bundles\Service\Service;
use app\bundles\ViewResolver\ViewResolver;
use app\bundles\Form\Custom\FormFactory;

class VarsViewExecutor extends DisplayExecutor {

  protected function execute(?Service $service) {
    FormFactory::create('VarsForm')->getView()->assign('vars_form');
    ViewResolver::content('vars_view');
    SetPartExecutor::varsView();
  }

}

?>
