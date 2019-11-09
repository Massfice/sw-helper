<?php

namespace app\init;

use Massfice\Storage\Storage;

class InitEnd {
  public static function init() {
    //To się wykona na samym końcu

    Storage::getInstance()->storeSession('post_generator_special_resolver_shelf');
  }
}

?>
