<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;
use app\bundles\Form\Input;

class VarsFormCreator implements FormCreator {
  public function create() : Form {
    $form = FormFactory::create('SetsForm')
      ->putInput(Input::createInput('begin','textarea'))
      ->putInput(Input::createInput('end','textarea'));

    $form->getInput('submit')->setText('Stwórz zmienną');
    $form->setName('vars_form');

    return $form;

    return $form;
  }
}

?>
