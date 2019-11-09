<?php

namespace app\bundles\Service\Custom\Proccess;

use app\bundles\Service\ServiceProccess;
use app\bundles\Service\ServiceParamLoader;
use app\bundles\Entity\Custom\EntityFactory;
use app\routes\Routes;
use Massfice\SessionUtils\SessionUtils;
use core\RoleUtils;
use app\bundles\ViewResolver\ViewResolver;
use app\controllers\SetsCtrl;
use core\App;
use app\bundles\Query\Custom\QueryFactory;

class MoveVarProccess implements ServiceProccess {

  private $i;

  public function __construct() {
    $this->i = 0;
  }

  public function execute(?ServiceParamLoader $loader) : ?array {

    $current_variable = EntityFactory::create('Variable',$loader->getParam('id'));

    $current_variable_position = $current_variable->getPosition() + $this->i;

    $variables_counter = App::getDB()->count('variable_table',[
      'set_id' => $loader->getParam('set_id')
    ]) - 1;

    if($current_variable_position > $variables_counter) {
       $current_variable_position = 0;

       QueryFactory::create('Update')->execute([
         'table' => 'variable_table',
         'data' => [
           'position[+]' => 1
         ],
         'where' => [
           'set_id' => $loader->getParam('set_id'),
           'id[!]' => $loader->getParam('id')
         ]
       ]);
    }
    else if($current_variable_position < 0) {
       $current_variable_position = $variables_counter;

       QueryFactory::create('Update')->execute([
         'table' => 'variable_table',
         'data' => [
           'position[+]' => -1
         ],
         'where' => [
           'set_id' => $loader->getParam('set_id'),
           'id[!]' => $loader->getParam('id')
         ]
       ]);
    }
    else {
      QueryFactory::create('Update')->execute([
        'table' => 'variable_table',
        'data' => [
          'position[+]' => (-1) * $this->i
        ],
        'where' => [
          'set_id' => $loader->getParam('set_id'),
          'position' => $current_variable_position
        ]
      ]);
    }

    $current_variable->setPosition($current_variable_position)->push();

    Routes::getInstance()->getRoute('varsView')->forward();

    return null;
  }

  public function setI(int $i) {
    $this->i = $i;
  }
}

?>
