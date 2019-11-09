<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\ViewResolver\ViewResolver;

class ModifyVarLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {

    $var_exist_validator = $validators->getValidator('var_exist_validator');
    $name_not_empty_validator = $validators->getValidator('name_not_empty_validator');
    $valid_set_validator = $validators->getValidator('valid_set_validator');
    $valid_var_validator = $validators->getValidator('valid_var_validator');

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
            'error' => 'Musisz podać nazwę zmiennej'
          ]

        ],

        'conds' => $valid_var
      ]
    ];

    $valid_modify = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $var_exist_validator,
                'loader' => $data_loader,
                'negate' => true
              ]
            ],
            'error' => 'Podana zmienna już istnieje'
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
