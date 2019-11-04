<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;
use app\bundles\Form\Input;

class LoginFormCreator implements FormCreator {
  public function create() : Form {
    $form = Form::createForm('login_form')
      ->putInput(Input::createInput('login','text'))
      ->putInput(Input::createInput('password','password'))
      ->putInput(Input::createInput('submit','submit')->setText('Zaloguj się'));

    return $form;
  }
}

?>
