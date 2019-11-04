<?php

namespace app\bundles\Service;

interface ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array;
}

?>
