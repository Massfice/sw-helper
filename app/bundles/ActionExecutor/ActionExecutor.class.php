<?php

namespace app\bundles\ActionExecutor;

use app\bundles\Service\Service;

abstract class ActionExecutor {
  protected abstract function onTry(?Service $service) : bool;
  protected abstract function onCatch();
  protected abstract function onFinaly();

  public function action(?Service $service = null) {
    if(!$this->onTry($service)) $this->onCatch();
    $this->onFinaly();
  }
}

?>
