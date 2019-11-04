<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;

class ServiceFactory {

  public static function useCreator(ServiceCreator $creator) : Service {
    return $creator->create(new ServiceCreatorTools());
  }

  public static function create(string $service) : Service {
    $creator = '\\app\\bundles\\Service\\Custom\\'.ucfirst($service).'Creator';
    return self::useCreator(new $creator());
  }
}

?>
