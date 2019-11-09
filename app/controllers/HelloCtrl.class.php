<?php

namespace app\controllers;

use app\bundles\ActionExecutor\Custom\ActionExecutorFactory;
use app\bundles\ViewResolver\ViewResolver;

class HelloCtrl {
  public function action_hello_guest() {
    ViewResolver::refresh('main');
    ActionExecutorFactory::create('ContentExecutor')->setContainer('main')->setContent('hello_guest')->action();
  }

  public function action_hello_user() {
    ViewResolver::refresh('home');
    ActionExecutorFactory::create('ContentExecutor')->setContainer('home')->setContent('hello_user')->action();
  }
}

?>
