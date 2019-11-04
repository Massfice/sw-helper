<?php

namespace app\bundles\Query;

interface Query {
  public function execute(?array $config) : ?array;
}

?>
