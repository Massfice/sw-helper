<?php

namespace app\bundles\Form;

use core\App;

class FormView {

  private $form;

  public function __construct(Form $form) {
    $this->form = $form;
  }

  public function __toString() {
    App::getSmarty()->assign('form',$this->form);
    $form = App::getSmarty()->fetch('forms/'.$this->form->getName().'.tpl');
    App::getSmarty()->clearAssign('form');

    return $form;
  }

  public function assign(string $key) {
    App::getSmarty()->assign($key,$this);
  }
}

?>
