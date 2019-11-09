<?php

namespace app\SWHelperFeatures\PostGenerator\Specials;

use app\SWHelperFeatures\PostGenerator\Special;

class SpecialFactory {
  public static function create(string $special) : Special {
    $special = '\\app\\SWHelperFeatures\\PostGenerator\\Specials\\'.ucfirst($special);
    return new $special();
  }
}

?>
