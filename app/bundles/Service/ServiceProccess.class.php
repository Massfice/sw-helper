<?php

namespace app\bundles\Service;

interface ServiceProccess {
  public function execute(?ServiceParamLoader $loader) : ?array;
}

?>
