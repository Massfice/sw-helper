<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;
use app\bundles\Form\SelectList;
use app\bundles\Form\Option;
use app\bundles\Query\Custom\QueryFactory;
use Massfice\SessionUtils\SessionUtils;

class SetsListFormCreator implements FormCreator {

  private $selected;

  public function __construct() {
    $this->selected = false;
  }

  private function selectedCheck(int $id) : bool {
    $b = false;

    if(!$this->selected) {
      $current_set = SessionUtils::load('current_set');
      $b = isset($current_set) && $current_set == $id;
      $this->selected = $b;
    }

    return $b;
  }

  public function create() : Form {

    $input = SelectList::createInput('set_id','set_select');

    $sets = QueryFactory::create('Select')->execute([
      'table' => 'set_table',
      'data' => [
        'name',
        'id'
      ],
      'where' => [
        'user_id' => SessionUtils::load('user')->getId()
      ]
    ]);

    foreach($sets as $s) {
      $option = new Option($s['name'],$s['id']);
      $option->setSelected($this->selectedCheck($s['id']));
      $input->setOption($s['name'], $option);
    }

    if(!$this->selected && isset($sets[0])) SessionUtils::store('current_set',$sets[0]['id']);

    $form = Form::createForm('sets_list_form')
      ->putInput($input);

    return $form;
  }
}

?>
