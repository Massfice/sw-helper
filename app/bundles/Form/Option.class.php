<?php

namespace app\bundles\Form;

use core\App;

class Option {
  private $text;
  private $value;
  private $selected;

  public function __construct(string $text, string $value) {
    $this->text = $text;
    $this->value = $value;
    $this->selected = false;
  }

  public function __toString() {
    App::getSmarty()->assign('option',$this);
    $input = App::getSmarty()->fetch('forms/inputs/option.tpl');
    App::getSmarty()->clearAssign('option');

    return $input;
  }

  public function getText() : string {
    return $this->text;
  }

  public function getValue() : string {
    return $this->value;
  }

  public function getSelected() : bool {
    return $this->selected;
  }

  public function setSelected(bool $selected) {
    $this->selected = $selected;
  }
}

?>
