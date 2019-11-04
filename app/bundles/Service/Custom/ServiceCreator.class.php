<?php

namespace app\bundles\Service\Custom;

use app\bundles\Service\Service;

interface ServiceCreator {
  public function create(ServiceCreatorTools $tools) : Service;
}

?>
