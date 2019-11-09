<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\ViewResolver\ViewResolver;

class ChangeCurrentSetLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {

    $set_exist_validator = $validators->getValidator('set_exist_validator');

    $data_loader = $loaders->getParamLoader('data_loader');

    $change_proccess = $proccesses->getProccess('change_proccess');

    $valid_change = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $set_exist_validator,
                'loader' => $data_loader,
              ]
            ],
            'error' => 'Podany zestaw nie istnieje'
          ]

        ]
      ]
    ];

    $b = ErrorsCreator::create($valid_change);

    if($b) {
      $change_proccess->execute($data_loader);
    }

    return null;
  }
}

?>
