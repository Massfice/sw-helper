<?php

namespace app\bundles\Entity;

use Massfice\Storage\Storage;
use app\bundles\Query\Query;

class EntityManager {

  private static function getQuery(string $type, string $class) : Query {
    $shelf = Storage::getInstance()->getShelf('entity_manager_'.$type);
    $query = $shelf->getData($class);

    if(!isset($query)) $query = $shelf->getData('default');

    return $query;
  }

  private static function setQuery(string $type, string $class, Query $query) {
    $shelf = Storage::getInstance()->getShelf('entity_manager_'.$type)->addData($class,$query,true);
  }

  public static function getSelectQuery(string $class) : Query {
    return self::getQuery('selects',$class);
  }

  public static function getUpdateQuery(string $class) : Query {
    return self::getQuery('updates',$class);
  }

  public static function getDeleteQuery(string $class) : Query {
    return self::getQuery('deletes',$class);
  }

  public static function getCreateQuery(string $class) : Query {
    return self::getQuery('creates',$class);
  }

  public static function setSelectQuery(Query $query, string $class = 'default') {
    self::setQuery('selects',$class,$query);
  }

  public static function setUpdateQuery(Query $query, string $class = 'default') {
    self::setQuery('updates',$class,$query);
  }

  public static function setDeleteQuery(Query $query, string $class = 'default') {
    self::setQuery('deletes',$class,$query);
  }

  public static function setCreateQuery(Query $query, string $class = 'default') {
    self::setQuery('creates',$class,$query);
  }
}

?>
