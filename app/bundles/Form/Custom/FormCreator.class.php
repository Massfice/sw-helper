<?php

namespace app\bundles\Form\Custom;

use app\bundles\Form\Form;

interface FormCreator {
  public function create() : Form;
}

?>
