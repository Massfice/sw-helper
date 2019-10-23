<?php

namespace app\bundles\ViewResolver;

use Massfice\ArrayRefactor\ArrayRefactory;

class ContainersHierarchy {

  private static $instance;

  private $hierarchy;
  private $size;

  private $set;

  private function __construct() {
    $this->size = 0;
    // $this->hierarchy['ja'] = 'mama';
    // $this->hierarchy['brat'] = 'mama';
    // $this->hierarchy['mama'] = 'babcia';
    // $this->hierarchy['babcia'] = 'pradziadek';
    // $this->hierarchy['wujek'] = 'pradziadek';
    // $this->hierarchy['ciocia'] = 'prababcia';
    // $this->hierarchy['prababcia'] = false;
    // $this->hierarchy['pradziadek'] = false;

    // $this->hierarchy['prababcia'] = false;
    // $this->hierarchy['pradziadek'] = false;
    // $this->hierarchy['babcia'] = 'prababcia';
    // $this->hierarchy['dziadek'] = 'pradziadek';
    // $this->hierarchy['ciotka'] = 'pradziadek';
    // $this->hierarchy['ojciec'] = 'dziadek';
    //
    // $this->hierarchy['adam'] = 'prababcia';
    // $this->hierarchy['dorotka'] = 'prababcia';
    // $this->hierarchy['janek'] = 'dorotka';
  }

  public static function getInstance() : self {
    if(!isset(self::$instance))
      self::$instance = new ContainersHierarchy();

    return self::$instance;
  }

  public function getHierarchyOf(string $child) : array {
    $r = [];
    if(isset($this->hierarchy[$child])) $r[] = $child;

    while(isset($this->hierarchy[$child]) && $this->hierarchy[$child]) {
      $r[] = $this->hierarchy[$child];
      $child = $this->hierarchy[$child];
    }

    return $r;
  }

  private function sizeOf(string $child) : int {
    return count($this->getHierarchyOf($child));
  }

  private function save(?string $child, ?string $parent) {
    if(isset($child)) {
      $this->hierarchy[$child] = isset($parent) && !is_numeric($parent) && $parent != '' ? $parent : false;

      if($this->sizeOf($child) > $this->size) $this->size = $this->sizeOf($child);
    }
  }

  private function proccessor(array $config) {
    foreach($config as $k => $c) {
      $key = explode('#',$k);
      $child = is_array($c) ? $key[1] : (is_string($c) ? $c : null);
      $parent = $key[0];
      $this->save($child,$parent);

      if(is_array($c)) $this->proccessor($c);
    }
  }

  private function refactorConfig(array $config) : array {
    $refactor = ArrayRefactory::createRefactor();
    $method = new AddParentKeys();
    $mode = ArrayRefactory::createMode('Single');

    $config = $refactor->refactor($mode,$method,$config);

    return $config;
  }

  public function getHierarchySize() : int {
    return $this->size;
  }

  public function setHierarchy(array $config) {
    $config = $this->refactorConfig($config);
    $this->proccessor($config);
  }
}

?>
