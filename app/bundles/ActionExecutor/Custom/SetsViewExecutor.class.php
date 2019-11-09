<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ActionExecutor\DisplayExecutor;
use app\bundles\Service\Service;
use app\bundles\ViewResolver\ViewResolver;
use app\bundles\Form\Custom\FormFactory;
use app\bundles\Query\Custom\QueryFactory;
use Massfice\SessionUtils\SessionUtils;
use app\bundles\Form\Custom\AllSetsFormCreator;

class SetsViewExecutor extends DisplayExecutor {

  protected function execute(?Service $service) {
    $sets = QueryFactory::create('Select')->execute([
      'table' => 'set_table',
      'data' => [
        'id',
        'name'
      ],
      'where' => [
        'user_id' => SessionUtils::load('user')->getId()
      ]
    ]);

    $all_sets = [];

    $creator = new AllSetsFormCreator();

    foreach($sets as $s) {
      $all_sets[] = $creator->setName($s['name'].'_form')->setValue($s['name'])->setId($s['id'])->create()->getView();
    }

    ViewResolver::assign('all_sets',$all_sets);
    FormFactory::create('SetsForm')->getView()->assign('sets_form');
    ViewResolver::content('sets_view');
  }

}

?>
