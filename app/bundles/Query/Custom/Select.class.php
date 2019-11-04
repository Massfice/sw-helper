<?php

namespace app\bundles\Query\Custom;

use app\bundles\Query\Query;
use core\App;

class Select implements Query {
  public function execute(?array $config) : ?array {
    return App::getDB()->select($config['table'],$config['data'],$config['where']);
  }
}

?>
