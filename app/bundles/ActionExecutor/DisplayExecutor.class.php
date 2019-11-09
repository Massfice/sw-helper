<?php

namespace app\bundles\ActionExecutor;

use app\bundles\Service\Service;
use core\App;
use app\bundles\ViewResolver\ViewResolver;

abstract class DisplayExecutor extends ActionExecutor {

  protected $container;

  public function __construct() {
    $this->container = null;
  }

  public function setContainer(string $container) : self {
    $this->container = $container;
    return $this;
  }

  abstract protected function execute(?Service $service);

  protected function onTry(?Service $service) : bool {
    $this->execute($service);
    return !App::getMessages()->isError();
  }

  protected function onCatch() {
    ViewResolver::content('errors','errors');
  }

  protected function onFinaly() {
    ViewResolver::display($this->container);
  }

}

?>
