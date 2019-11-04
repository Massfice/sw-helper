<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ActionExecutor\DisplayExecutor;
use app\bundles\Service\Service;
use app\bundles\ViewResolver\ViewResolver;

class ContentExecutor extends DisplayExecutor {

  private $content;

  public function __construct() {
    $this->content = '';
    $this->container = '';
  }

  protected function execute(?Service $service) {
    ViewResolver::content($this->content);
  }

  public function setContent(string $content) : self {
    $this->content = $content;

    return $this;
  }

}

?>
