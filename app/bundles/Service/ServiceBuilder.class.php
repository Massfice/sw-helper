<?php

namespace app\bundles\Service;

class ServiceBuilder extends ServiceSkeleton {

  private function __construct() {}

  public function build() : Service {
    return new Service($this);
  }

  public static function getBuilder() : self {
    return new ServiceBuilder();
  }
}

?>
