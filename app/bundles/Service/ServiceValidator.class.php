<?php

namespace app\bundles\Service;

interface ServiceValidator {
  public function validate(?ServiceParamLoader $loader) : bool;
}

?>
