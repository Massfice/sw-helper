<?php

namespace app\bundles\Form;

use Iterator;

class SelectList extends Input implements Iterator {
  private $options;
  private $position;

  protected function __construct(string $name, ?string $template) {
    $this->options = [];
    parent::__construct($name,$template);
  }

  public function setOption(string $key, Option $option) {
    $this->options[$key] = $option;
  }

  public static function getOption(string $key) : Option {
    return $this->options[$key];
  }

  //Iterator
  public function rewind() {
    $this->position = 0;
  }

  public function current() {
    return $this->options[array_keys($this->options)[$this->position]];
  }

  public function key() {
    return array_keys($this->options)[$this->position];
  }

  public function next() {
    $this->position++;
  }

  public function valid() {
    return isset(array_keys($this->options)[$this->position]);
  }


}

?>
