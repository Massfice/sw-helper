<?php

namespace app\bundles\Entity\Custom;

use app\bundles\Entity\Entity;

class EntityFactory {
  public static function create(string $entity, $seed = null) : Entity {
    $entity = '\\app\\bundles\\Entity\\Custom\\'.ucfirst($entity);
    return new $entity($seed);
  }
}

?>
