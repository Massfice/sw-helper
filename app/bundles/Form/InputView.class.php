<?php

namespace app\bundles\Form;

use core\App;

class InputView {

  private $input;

  public function __construct(Input $input) {
    $this->input = $input;
  }

  public function __toString() {
    App::getSmarty()->assign('input',$this->input);
    $input = App::getSmarty()->fetch('forms/inputs/'.$this->input->getTemplate().'.tpl');
    App::getSmarty()->clearAssign('input');

    return $input;
  }
}

?>
