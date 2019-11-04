<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceParamLoader;
use app\bundles\Service\ServiceValidator;
use core\Utils;

class ErrorsCreator {

  private static function validate(?ServiceParamLoader $loader, ServiceValidator $validator, bool $negate) : bool {
    $b = $validator->validate($loader);
    return $b && !$negate || !$b && $negate;
  }

  private static function thirdStep(array $config) {
    $loader = isset($config['loader']) ? $config['loader'] : null;
    $negate = isset($config['negate']) ? true : false;
    $b = self::validate($loader,$config['validator'],$negate);

    return $b;
  }

  private static function secondStep(array $config) : bool {
    $b = true;

    foreach($config['minitests'] as $m) {
      $b = self::thirdStep($m) && $b;
    }

    if(!$b)
      Utils:: addErrorMessage($config['error']);

    return $b;
  }

  private static function firstStep(array $config) : bool {
    $tests = $config['tests'];
    $conds = isset($config['conds']) ? $config['conds'] : false;

    if(!$conds || self::create($conds)) {
      $b = true;
      foreach($tests as $t) {
        $b = self::secondStep($t) && $b;
      }
      return $b;
    } else {
      return false;
    }
  }

  public static function create(array $config) : bool {
    $b = true;

    foreach($config as $c) {
      $b = self::firstStep($c) && $b;
    }

    return $b;
  }
}

?>
