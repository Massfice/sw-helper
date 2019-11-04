<?php

namespace app\bundles\Entity;

abstract class Entity {

  protected $select_query;
  protected $create_query;
  protected $update_query;
  protected $delete_query;

  abstract protected function init($seed);

  abstract protected function getSelectConfig() : ?array;
  abstract protected function getCreateConfig() : ?array;
  abstract protected function getUpdateConfig() : ?array;
  abstract protected function getDeleteConfig() : ?array;

  abstract protected function onSelect(?array $array);
  abstract protected function onCreate(?array $array);
  abstract protected function onUpdate(?array $array);

  abstract protected function shouldUpdate() : bool;
  abstract protected function shouldCreate() : bool;
  abstract protected function shouldDelete() : bool;

  public function __construct($seed = null) {
    $class = get_class($this);
    $this->select_query = EntityManager::getSelectQuery($class);
    $this->create_query = EntityManager::getCreateQuery($class);
    $this->update_query = EntityManager::getUpdateQuery($class);
    $this->delete_query = EntityManager::getDeleteQuery($class);

    if(isset($seed)) {
      $this->init($seed);
      $config = $this->getSelectConfig();
      $array = $this->select_query->execute($config);
      $this->onSelect($array);
    }
  }

  public function delete() {
    if($this->shouldDelete()) {
      $config = $this->getDeleteConfig();
      $this->delete_query->execute($config);
    }
  }

  public function push() {

    if($this->shouldCreate()) {
      $config = $this->getCreateConfig();
      $array = $this->create_query->execute($config);
      $this->onCreate($array);
    }

    if($this->shouldUpdate()) {
      $config = $this->getUpdateConfig();
      $array = $this->update_query->execute($config);
      $this->onUpdate($array);
    }
  }
}

?>
