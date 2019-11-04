<?php

namespace app\init\core;

use Massfice\Storage\ShelfBuilder;
use Massfice\UtilsManager\UtilsManager;

class Init {
  public static function init() {
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
}

?>
