<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;
use app\bundles\Form\Input;

class AllSetsFormCreator implements FormCreator {

  protected $name;
  protected $value;
  protected $id;

  public function __construct() {
    $this->name = '';
    $this->value = '';
    $this->id = 0;
  }

  public function create() : Form {
    $form = Form::createForm('all_sets_form')
      ->putInput(Input::createInput('name','all_sets_text')->setDefaultValue($this->value))
      ->putInput(Input::createInput('submit_modify','submit')->setText('Modyfikuj'))
      ->putInput(Input::createInput('submit_delete','submit')->setText('Usuń'))
      ->putInput(Input::createInput('id','all_sets_hidden')->setDefaultValue($this->id))
      ->setVar('name',$this->name);

    return $form;
  }

  public function setName(string $name) : self {
    $this->name = $name;
    return $this;
  }

  public function setValue($value) : self {
    $this->value = $value;
    return $this;
  }

  public function setId(int $id) : self {
    $this->id = $id;
    return $this;
  }
}

?>
