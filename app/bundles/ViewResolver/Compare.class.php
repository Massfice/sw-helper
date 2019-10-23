<?php

namespace app\bundles\ViewResolver;

use app\routes\RoutesInfo;
use Massfice\SelectingViewResolver\Comparator\ComparatorMethod;

class Compare implements ComparatorMethod {
  public function makeCompare(string $seed, string $prev) : array {
    $hseed = ContainersHierarchy::getInstance()->getHierarchyOf($seed);
    $hprev = ContainersHierarchy::getInstance()->getHierarchyOf($prev);
    $hseed = array_reverse($hseed);
    $hprev = array_reverse($hprev);

    $r = [];

    $hsize = ContainersHierarchy::getInstance()->getHierarchySize();

    for($i = 0; $i < $hsize; $i++) {
      if(!isset($hseed[$i])) $hseed[$i] = '';
      if(!isset($hprev[$i])) $hprev[$i] = '';
    }

    $buff = $hseed;
    for($i = $hsize; $i < count($hseed); $i++) {
      unset($buff[$i]);
    }
    $hseed = $buff;

    $buff = $hprev;
    for($i = $hsize; $i < count($hprev); $i++) {
      unset($buff[$i]);
    }
    $hprev = $buff;

    $last = RoutesInfo::getLast();
    if($last != 'part')
      $r = $hseed;
    else {
      for($i = 0; $i < $hsize; $i++) {
        if($hseed[$i] === $hprev[$i]) $r[$i] = false;
        else $r[$i] = $hseed[$i];
      }
    }

    return $r;
  }
}

?>
