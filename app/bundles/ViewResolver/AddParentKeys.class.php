<?php

namespace app\bundles\ViewResolver;

use Massfice\ArrayRefactor\Methods\ArrayRefactorMethod;

class AddParentKeys implements ArrayRefactorMethod {

  private function proccessor(array $array, $key) : array {

    $buff = [];

    foreach($array as $k => $a) {
      $buff[$key.'#'.$k] = $a;

      if(is_array($buff[$key.'#'.$k])) $buff[$key.'#'.$k] = $this->proccessor($buff[$key.'#'.$k],$k);
    }

    $array = $buff;

    return $array;
  }

  public function refactor(array $array, array $args) : array {

    return $this->proccessor($array,null);
  }
}

?>
