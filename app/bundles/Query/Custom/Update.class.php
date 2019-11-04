<?php

namespace app\bundles\Query\Custom;

use app\bundles\Query\Query;
use core\App;

class Update implements Query {
  public function execute(?array $config) : ?array {
    App::getDB()->update($config['table'],$config['data'],$config['where']);

    return null;
  }
}

?>
