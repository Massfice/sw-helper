<?php

namespace app\bundles\Form;

use app\bundles\Service\ServiceParamLoader;
use Iterator;

class FormData implements ServiceParamLoader,Iterator {

  private $inputs;
  private $position;

  public function __construct(Form $form) {
    $this->inputs = [];
    foreach($form as $k => $i) {
      $this->inputs[$k] = $i;
    }
  }

  public function getParam(?string $key) {
    if(isset($this->inputs[$key]))
      return $this->inputs[$key]->getData()->getParam();
    else
      return null;
  }

  //Iterator
  public function rewind() {
    $this->position = 0;
  }

  public function current() {
    return $this->inputs[array_keys($this->inputs)[$this->position]]->getData()->getParam();
  }

  public function key() {
    return array_keys($this->inputs)[$this->position];
  }

  public function next() {
    $this->position++;
  }

  public function valid() {
    return isset(array_keys($this->inputs)[$this->position]);
  }

}

?>
