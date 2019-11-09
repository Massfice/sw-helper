<?php

namespace app\SWHelperFeatures\PostGenerator;

interface Special {
  public function getName() : string;
  public function generate(string $string) : string;
}

?>
