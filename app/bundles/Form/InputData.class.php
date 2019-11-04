<?php

namespace app\bundles\Form;

use app\bundles\Service\ServiceParamLoader;
use core\ParamUtils;

class InputData implements ServiceParamLoader {

  private $name;

  public function __construct(Input $input) {
    $this->name = $input->getName();
  }

  public function getParam(?string $key = null) {
    return ParamUtils::getFromRequest($this->name);
  }

}


?>
