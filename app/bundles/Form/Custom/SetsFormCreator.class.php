<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;
use app\bundles\Form\Input;

class SetsFormCreator implements FormCreator {
  public function create() : Form {
    $form = Form::createForm('sets_form')
      ->putInput(Input::createInput('name','text'))
      ->putInput(Input::createInput('submit','submit')->setText('Stwórz zestaw'));

    return $form;
  }
}

?>
