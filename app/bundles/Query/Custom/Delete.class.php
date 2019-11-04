<?php

namespace app\bundles\Query\Custom;

use app\bundles\Query\Query;
use core\App;

class Delete implements Query {
  public function execute(?array $config) : ?array {
    App::getDB()->delete($config['table'],$config['where']);

    return null;
  }
}

?>
