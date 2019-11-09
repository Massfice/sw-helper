<?php

namespace app\bundles\Query\Custom;

use app\bundles\Query\Query;
use core\App;

class DeleteSet implements Query {
  public function execute(?array $config) : ?array {

    App::getDB()->delete('variable_table',[
      'set_id' => $config['id']
    ]);

    App::getDB()->delete('set_table',$config);

    return null;
  }
}

?>
