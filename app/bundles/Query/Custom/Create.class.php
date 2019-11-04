<?php

namespace app\bundles\Query\Custom;

use app\bundles\Query\Query;
use core\App;

class Create implements Query {
  public function execute(?array $config) : ?array {
    App::getDB()->insert($config['table'],$config['data']);

    return ['id' => App::getDB()->id()];
  }
}

?>
