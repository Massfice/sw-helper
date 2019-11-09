<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\ViewResolver\ViewResolver;

class DeleteVarLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {

    $valid_set_validator = $validators->getValidator('valid_set_validator');
    $valid_var_validator = $validators->getValidator('valid_var_validator');

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

        ],
      ]
    ];

    $valid_var = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $valid_var_validator,
                'loader' => $data_loader
              ]
            ],
            'error' => 'Niewłaściwa zmienna'
          ]

        ],

        'conds' => $valid_set
      ]
    ];

    $b = ErrorsCreator::create($valid_var);

    if($b) {
      $delete_proccess->execute($data_loader);
    }

    return null;
  }
}

?>
