<?php

namespace app\bundles\Service;

interface ServiceParamLoader {
  public function getParam(?string $key);
}

?>
