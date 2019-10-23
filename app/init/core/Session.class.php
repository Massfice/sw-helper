<?php

namespace app\init\core;

use core\SessionUtils;
use Massfice\UtilsManager\SessionUtilInterface;

class Session implements SessionUtilInterface {
  public function store(string $key, $data) {
    if(is_object($data) || is_array($data))
      SessionUtils::storeObject($key,$data);
    else {
      SessionUtils::store($key,$data);
    }
  }

  public function load(string $key) {
    $r = SessionUtils::load($key,true);

    return $r;
  }

  public function unset(string $key) {
    SessionUtils::load($key);
  }

  public function isset(string $key) : bool {
    $b = $this->load($key);
    return isset($b);
  }
}

?>
