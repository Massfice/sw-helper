<?php

namespace app\routes;

use core\ParamUtils;

class RoutesInfo {
  public static function getRoutePath() : string {
    $action = ParamUtils::getFromCleanUrl(0);

    $i = 1;
    while($buff = ParamUtils::getFromCleanUrl($i)) {
      $action = $action.'/'.$buff;
      $i++;
    }

    return $action;
  }

  public static function getLast() : string {
    $action = '';

    $i = 0;
    while($buff = ParamUtils::getFromCleanUrl($i)) {
      $action = $buff;
      $i++;
    }

    return $action;
  }

  public static function getFromCleanUrl(int $i) {
    $i = $i + 2;
    return ParamUtils::getFromCleanUrl($i);
  }

  public static function getAction() {
    return ParamUtils::getFromCleanUrl(1);
  }
}

?>
