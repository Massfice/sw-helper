<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\ViewResolver\ViewResolver;

class DeleteSetLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {

    $valid_set_validator = $validators->getValidator('valid_set_validator');

    $data_loader = $loaders->getParamLoader('data_loader');

    $delete_proccess = $proccesses->getProccess('delete_proccess');

    $valid_set = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $valid_set_validator,
                'loader' => $data_loader
              ]
            ],
            'error' => 'Niewłaściwy zestaw zmiennych'
          ]

        ]
      ]
    ];

    $b = ErrorsCreator::create($valid_set);

    if($b) {
      $delete_proccess->execute($data_loader);
    }

    return null;
  }
}

?>
