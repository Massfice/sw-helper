<?php

namespace app\init;

use app\bundles\Query\Custom\QueryFactory;
use app\bundles\Entity\EntityManager;

class EntityManagerInit {
  public static function init() {
    $create = QueryFactory::create('Create');
    $delete = QueryFactory::create('Delete');
    $update = QueryFactory::create('Update');
    $select = QueryFactory::create('Select');

    EntityManager::setSelectQuery($select);
    EntityManager::setUpdateQuery($update);
    EntityManager::setCreateQuery($create);
    EntityManager::setDeleteQuery($delete);
  }
}

?>
