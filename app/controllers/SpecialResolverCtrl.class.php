<?php

namespace app\controllers;

use app\SWHelperFeatures\PostGenerator\SpecialResolver;
use app\SWHelperFeatures\PostGenerator\Specials\SpecialFactory;
use app\routes\Routes;

class SpecialResolverCtrl {

  private $should_redirect;

  public function __construct() {
    $this->should_redirect = true;
    SpecialResolver::clear();
  }

  public function __destruct() {
    if($this->should_redirect) Routes::getInstance()->getRoute('generatorView')->forward();
  }

  public function action_clearCurrentSpecial() {
    $this->should_redirect = false;
  }

  public function action_addTestSpecial() {
    SpecialResolver::addSpecial(SpecialFactory::create('TestSpecial'));
  }


}

?>
