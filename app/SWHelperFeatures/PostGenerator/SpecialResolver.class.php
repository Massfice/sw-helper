<?php

namespace app\SWHelperFeatures\PostGenerator;

use Massfice\Storage\Storage;
use Massfice\Storage\Shelf;
use app\bundles\Form\Form;
use app\bundles\Form\Input;

class SpecialResolver {

  private static function getShelf() : Shelf {
    return Storage::getInstance()->getShelf('post_generator_special_resolver_shelf');
  }

  public static function isSpecial(string $key) {
    $shelf = self::getShelf();

    $data = $shelf->getData($key);

    return isset($data);
  }

  public static function clear() {
    $shelf = self::getShelf();

    $shelf->clearData();
  }

  public static function addSpecial(Special $special) {
    $shelf = self::getShelf();

    $shelf->addData($special->getName(),$special,true);
  }

  public static function getSpecial($key) : Special {
    $shelf = self::getShelf();
    return $shelf->getData($key);
  }

  public static function fillForm(Form & $form) {
    $shelf = self::getShelf();
    $input_names = [];
    foreach($form as $k => $f) {
      $input_names[] = $k;
    }

    foreach($shelf as $k => $s) {
      if(!in_array($k.'_begin',$input_names))
        $form->putInput(Input::createInput($k.'_begin','textarea_titled')->setText('['.$k.']'));
    }
  }
}

?>
