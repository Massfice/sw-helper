<?php

namespace app\init;

use Massfice\Storage\ShelfBuilder;

class InitCustom {
  public static function init() {
    //Inne ustawienia

    ShelfBuilder::getBuilder()
      ->setJsonAllowed(false)
      ->setSessionAllowed(true)
      ->setOverrideAllowed(true)
      ->setOverrideSessionAllowed(true)
      ->setModifyAllowed(false)
      ->load('post_generator_special_resolver_shelf')
      ->addToStorage('post_generator_special_resolver_shelf');
  }
}

?>
