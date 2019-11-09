<?php

namespace app\init\core;

use Massfice\Storage\ShelfBuilder;
use Massfice\UtilsManager\UtilsManager;
use app\init\InitEnd;

class Init {

  private static $instance;

  private function __construct() {}

  public static function getInstance() : self {
    if(!isset(self::$instance))
      self::$instance = new self();

    return self::$instance;
  }

  public function init() {
    ShelfBuilder::getBuilder()
      ->setJsonAllowed(true)
      ->setSessionAllowed(false)
      ->setOverrideAllowed(true)
      ->setOverrideSessionAllowed(false)
      ->setModifyAllowed(false)
      ->build()
      ->addToStorage('view_resolver_containers')
      ->getBuilder()
      ->setOverrideAllowed(true)
      ->build()
      ->addToStorage('view_resolver_contents')
      ->getBuilder()
      ->build()
      ->addToStorage('view_resolver_data');

    ShelfBuilder::getBuilder()
      ->setJsonAllowed(false)
      ->setSessionAllowed(false)
      ->setOverrideAllowed(true)
      ->setOverrideSessionAllowed(false)
      ->setModifyAllowed(false)
      ->build()
      ->addToStorage('entity_manager_selects')
      ->getBuilder()
      ->build()
      ->addToStorage('entity_manager_creates')
      ->getBuilder()
      ->build()
      ->addToStorage('entity_manager_deletes')
      ->getBuilder()
      ->build()
      ->addToStorage('entity_manager_updates');

    UtilsManager::getInstance()->setSessionUtil(new Session());
  }

  public function __destruct() {
    InitEnd::init();
  }
}

?>
