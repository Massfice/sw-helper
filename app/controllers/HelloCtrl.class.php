<?php

namespace app\controllers;

use app\bundles\ActionExecutor\Custom\ActionExecutorFactory;

class HelloCtrl {
  public function action_hello_guest() {
    ActionExecutorFactory::create('ContentExecutor')->setContainer('main')->setContent('hello_guest')->action();
  }

  public function action_hello_user() {
    ActionExecutorFactory::create('ContentExecutor')->setContainer('main')->setContent('hello_user')->action();
  }
}

?>
