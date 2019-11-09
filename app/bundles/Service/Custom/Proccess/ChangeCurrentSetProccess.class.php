<?php

namespace app\bundles\Service\Custom\Proccess;

use app\bundles\Service\ServiceProccess;
use app\bundles\Service\ServiceParamLoader;
use Massfice\SessionUtils\SessionUtils;
use app\bundles\ActionExecutor\Custom\SetPartExecutor;

class ChangeCurrentSetProccess implements ServiceProccess {
  public function execute(?ServiceParamLoader $loader) : ?array {
    SessionUtils::store('current_set',$loader->getParam('set_id'));

    $action = SessionUtils::load('last_set_action');
    if(isset($action)) SetPartExecutor::$action();

    return null;
  }
}

?>
