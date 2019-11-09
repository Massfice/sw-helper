<?php

namespace app\bundles\Form;

class Input {

  protected $name;
  protected $template;
  protected $text;
  protected $default_value;

  protected function __construct(string $name, ?string $template) {
    $this->name = $name;
    $this->template = $template;
  }

  public static function createInput(string $name, ?string $template = null) : self {
    return new static($name,$template);
  }

  public function getName() : string {
    return $this->name;
  }

  public function getTemplate() : string {
    return $this->template;
  }

  public function getText() : ?string {
    return $this->text;
  }

  public function getDefaultValue() : ?string {
    return $this->default_value;
  }

  public function setName(string $name, ?Form $form = null) : self {
    if(isset($form)) {
      $form->clearInput($this->name);
      $this->name = $name;
      $form->putInput($this);
    } else {
      $this->name = $name;
    }
    return $this;
  }

  public function setTemplate(string $template) : self {
    $this->template = $template;
    return $this;
  }

  public function setText(string $text) : self {
    $this->text = $text;
    return $this;
  }

  public function setDefaultValue(string $value) : self {
    $this->default_value = $value;
    return $this;
  }

  public function getView() : InputView {
    return new InputView($this);
  }

  public function getData() : InputData {
    return new InputData($this);
  }

}

?>
