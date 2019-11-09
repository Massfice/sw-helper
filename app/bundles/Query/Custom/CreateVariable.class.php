<?php

namespace app\bundles\Query\Custom;

use app\bundles\Query\Query;
use core\App;

class CreateVariable implements Query {
  public function execute(?array $config) : ?array {

    $i = App::getDB()->count('variable_table',[
      'set_id' => $config['set_id']
    ]);

    $config['position'] = $i;

    App::getDB()->insert('variable_table',$config);

    return ['id' => App::getDB()->id()];
  }
}

?>
