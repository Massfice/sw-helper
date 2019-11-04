<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;
use app\bundles\Form\Input;

class RegisterFormCreator implements FormCreator {
  public function create() : Form {
    $creator = new LoginFormCreator();
    $form = $creator->create();
    $form->setName('register_form');
    $form->getInput('submit')->setText('Zarejestruj się');
    $form->putInput(Input::createInput('repassword','password'));

    return $form;
  }
}

?>
