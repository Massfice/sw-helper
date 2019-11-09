<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;
use app\bundles\Form\Input;
use Massfice\SessionUtils\SessionUtils;
use app\bundles\Query\Custom\QueryFactory;
use app\SWHelperFeatures\PostGenerator\SpecialResolver;

class PostGeneratorFormCreator implements FormCreator {
  public function create() : Form {
    $form = Form::createForm('post_generator_form');

    $vars = QueryFactory::create('Select')->execute([
      'table' => 'variable_table',
      'data' => [
        'name',
        'begin',
        'end'
      ],
      'where' => [
        'set_id' => SessionUtils::load('current_set'),
        'ORDER' => [
          'position' => 'ASC'
        ]
      ]
    ]);

    foreach($vars as $v) {
      $form->putInput(Input::createInput($v['name'].'_begin','textarea_titled')->setDefaultValue($v['begin'])->setText('['.$v['name'].']'));
      $form->putInput(Input::createInput($v['name'].'_end','textarea_titled')->setDefaultValue($v['end'])->setText('[/'.$v['name'].']'));
    }

    SpecialResolver::fillForm($form);

    $form->putInput(Input::createInput('submit','submit')->setText('Generuj'));

    return $form;
  }
}

?>
