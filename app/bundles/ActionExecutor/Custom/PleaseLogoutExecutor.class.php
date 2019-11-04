<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ActionExecutor\DisplayExecutor;
use app\bundles\Service\Service;
use core\Utils;

class PleaseLogoutExecutor extends DisplayExecutor {

  protected function execute(?Service $service) {
    Utils::addErrorMessage('Żeby to zrobić musisz się wylogować');
  }

}

?>
