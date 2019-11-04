<?php

namespace app\bundles\ActionExecutor\Custom;

use app\bundles\ActionExecutor\ActionExecutor;

class ActionExecutorFactory {
  public static function create(string $executor) : ActionExecutor {
    $executor = '\\app\\bundles\\ActionExecutor\\Custom\\'.ucfirst($executor);
    return new $executor();
  }
}

?>
