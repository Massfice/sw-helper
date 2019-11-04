<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ActionExecutor\DisplayExecutor;
use app\bundles\Service\Service;
use app\bundles\ViewResolver\ViewResolver;
use app\bundles\Form\Custom\FormFactory;

class ServiceExecutor extends DisplayExecutor {

  protected function execute(?Service $service) {
    $service->execute();
  }

}

?>
