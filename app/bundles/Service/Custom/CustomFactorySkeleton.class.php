<?php

namespace app\bundles\Service\Custom;

abstract class CustomFactorySkeleton {
  protected function __construct() {}

  public static function getFactory() : self {
    return new static();
  }
}

?>
