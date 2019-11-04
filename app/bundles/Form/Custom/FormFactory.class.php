<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;

class FormFactory {

  public static function useCreator(FormCreator $creator) : Form {
    return $creator->create();
  }

  public static function create(string $form) : Form {
    $creator = '\\app\\bundles\\Form\\Custom\\'.ucfirst($form).'Creator';
    return self::useCreator(new $creator());
  }
}

?>
