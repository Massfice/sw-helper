<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;
use app\bundles\Form\Input;

class AllVarsFormCreator extends AllSetsFormCreator {

  private $begin;
  private $end;

  public function __construct() {
    $this->begin = '';
    $this->end = '';
    parent::__construct();
  }

  public function create() : Form {
    $form = Form::createForm('all_vars_form')
      ->putInput(Input::createInput('name','all_sets_text')->setDefaultValue($this->value))
      ->putInput(Input::createInput('submit_modify','submit')->setText('Modyfikuj'))
      ->putInput(Input::createInput('submit_delete','submit')->setText('Usuń'))
      ->putInput(Input::createInput('submit_up','submit')->setText('Przenieś zmienną w górę'))
      ->putInput(Input::createInput('submit_down','submit')->setText('Przenieś zmienną w dół'))
      ->putInput(Input::createInput('id','all_sets_hidden')->setDefaultValue($this->id))
      ->putInput(Input::createInput('begin','all_sets_textarea')->setDefaultValue($this->begin))
      ->putInput(Input::createInput('end','all_sets_textarea')->setDefaultValue($this->end))
      ->setVar('name',$this->name);

    return $form;
  }

  public function setBegin(string $begin) : self {
    $this->begin = $begin;
    return $this;
  }

  public function setEnd(string $end) : self {
    $this->end = $end;
    return $this;
  }
}

?>
