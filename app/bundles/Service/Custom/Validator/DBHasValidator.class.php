<?php

namespace app\bundles\Service\Custom\Validator;

use app\bundles\Service\ServiceParamLoader;
use app\bundles\Service\ServiceValidator;
use core\App;

class DBHasValidator implements ServiceValidator {

  private $table;
  private $where;

  private function sha1(string $str) {
    return sha1($str);
  }

  public function __construct() {
    $this->table = '';
    $this->where = [];
  }

  public function setTable(string $table) : self {
    $this->table = $table;
    return $this;
  }

  public function setWhere(array $where) : self {
    $this->where = $where;
    return $this;
  }

  public function validate(?ServiceParamLoader $loader) : bool {

    $where = [];

    foreach($this->where as $k => $w) {
      $w = \explode('.',$w);
      if(!isset($w[1])) $where[$k] = $loader->getParam($w[0]);
      else {
        $method = $w[1];
        $where[$k] = $this->$method($loader->getParam($w[0]));
      }
    }
    return App::getDB()->has($this->table,$where);
  }
}

?>
