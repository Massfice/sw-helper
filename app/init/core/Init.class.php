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
      ->build()
      ->addToStorage('view_resolver_contents')
      ->getBuilder()
      ->build()
      ->addToStorage('view_resolver_data');

    UtilsManager::getInstance()->setSessionUtil(new Session());
  }
}

?>
