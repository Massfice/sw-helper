<?php

namespace app\bundles\Query\Custom;

use app\bundles\Query\Query;

class QueryFactory {
  public static function create(string $query) : Query {
    $query = '\\app\\bundles\\Query\\Custom\\'.ucfirst($query);
    return new $query();
  }
}

?>
