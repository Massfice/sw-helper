<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ViewResolver\ViewResolver;
use app\bundles\Query\Custom\QueryFactory;
use Massfice\SessionUtils\SessionUtils;
use app\bundles\Form\Custom\AllVarsFormCreator;
use app\bundles\Form\Custom\FormFactory;

class SetPartExecutor {

  public static function setsView() {

  }

  public static function createSet() {
    self::setView();
  }

  public static function modifySet() {
    self::setView();
  }

  public static function deleteSet() {
    self::setView();
  }

  public static function varsView() {
    $set = QueryFactory::create('Select')->execute([
      'table' => 'set_table',
      'data' => [
        'name'
      ],
      'where' => [
        'id' => SessionUtils::load('current_set'),
        'user_id' => SessionUtils::load('user')->getId()
      ]
    ]);

    ViewResolver::assign('set_name',$set[0]['name']);
    ViewResolver::content('current_set_name','current_set');

    $vars = QueryFactory::create('Select')->execute([
      'table' => 'variable_table',
      'data' => [
        'id',
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

    $all_vars = [];

    $creator = new AllVarsFormCreator();

    foreach($vars as $v) {
      $all_vars[] = $creator->setName($v['name'].'_form')->setValue($v['name'])->setId($v['id'])->setBegin($v['begin'])->setEnd($v['end'])->create()->getView();
    }

    ViewResolver::assign('all_vars',$all_vars);
    ViewResolver::content('all_vars','vars');
  }

  public static function createVar() {
    self::varsView();
  }

  public static function modifyVar() {
    self::varsView();
  }

  public static function deleteVar() {
    self::varsView();
  }

  public static function moveVarUp() {
    self::varsView();
  }

  public static function moveVarDown() {
    self:: varsView();
  }

  public static function generatorView() {
    FormFactory::create('PostGeneratorForm')->getView()->assign('post_generator_form');
    ViewResolver::content('post_generator_form_view','generator_vars');
  }

  public static function generatePost() {
    self::generatorView();
  }

  public static function addTestSpecial() {
    self::generatorView();
  }
}

?>
