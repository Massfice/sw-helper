<?php

namespace app\bundles\Form;

use core\App;
use Iterator;

class Form implements Iterator {

  private $name;
  private $inputs;
  private $position;
  private $vars;

  private function __construct(?string $name) {
    $this->inputs = [];
    $this->name = $name;
  }

  public static function createForm(?string $name = null) : self {
    return new self($name);
  }

  public function putInput(Input $input) : self {
    $this->inputs[$input->getName()] = $input;
    return $this;
  }

  public function getInput(string $key) : Input {
    return $this->inputs[$key];
  }

  public function clearInput(string $key) {
    unset($this->inputs[$key]);
  }

  public function getName() : string {
    return $this->name;
  }

  public function setVar(string $key, $data) : self {
    $this->vars[$key] = $data;
    return $this;
  }

  public function getVar(string $key) {
    return $this->vars[$key];
  }

  public function setName(string $name) : self {
    $this->name = $name;
    return $this;
  }

  public function getView() : FormView {
    return new FormView($this);
  }

  public function getData() : FormData {
    return new FormData($this);
  }

  //Iterator
  public function rewind() {
    $this->position = 0;
  }

  public function current() {
    return $this->inputs[array_keys($this->inputs)[$this->position]];
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
