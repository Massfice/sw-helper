<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\ViewResolver\ViewResolver;

class CreateSetLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {

    $set_exist_validator = $validators->getValidator('set_exist_validator');
    $name_not_empty_validator = $validators->getValidator('name_not_empty_validator');

    $data_loader = $loaders->getParamLoader('data_loader');

    $create_proccess = $proccesses->getProccess('create_proccess');

    $name_not_empty = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $name_not_empty_validator,
                'loader' => $data_loader
              ]
            ],
            'error' => 'Musisz podać nazwę zestawu'
          ]

        ]
      ]
    ];

    $valid_create = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $set_exist_validator,
                'loader' => $data_loader,
                'negate' => true
              ]
            ],
            'error' => 'Podany zestaw już istnieje'
          ]

        ],

        'conds' => $name_not_empty
      ]
    ];

    $b = ErrorsCreator::create($valid_create);

    if($b) {
      $create_proccess->execute($data_loader);
    }

    return null;
  }
}

?>
