<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\ViewResolver\ViewResolver;

class ModifySetLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {

    $set_exist_validator = $validators->getValidator('set_exist_validator');
    $name_not_empty_validator = $validators->getValidator('name_not_empty_validator');
    $valid_set_validator = $validators->getValidator('valid_set_validator');

    $data_loader = $loaders->getParamLoader('data_loader');

    $modify_proccess = $proccesses->getProccess('modify_proccess');

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

        ],

        'conds' => $valid_set
      ]
    ];

    $valid_modify = [
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

    $b = ErrorsCreator::create($valid_modify);

    if($b) {
      $modify_proccess->execute($data_loader);
    }

    return null;
  }
}

?>
