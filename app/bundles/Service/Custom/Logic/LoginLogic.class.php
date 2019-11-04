<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\ViewResolver\ViewResolver;

class LoginLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {

    $user_exist_validator = $validators->getValidator('user_exist_validator');
    $login_not_empty_validator = $validators->getValidator('login_not_empty_validator');
    $password_not_empty_validator = $validators->getValidator('password_not_empty_validator');

    $user_data_loader = $loaders->getParamLoader('user_data_loader');

    $login_proccess = $proccesses->getProccess('login_proccess');

    $data_not_empty = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $login_not_empty_validator,
                'loader' => $user_data_loader
              ]
            ],
            'error' => 'Musisz podać login'
          ],

          [
            'minitests' => [
              [
                'validator' => $password_not_empty_validator,
                'loader' => $user_data_loader
              ]
            ],
            'error' => 'Musisz podać hasło'
          ]

        ]
      ]
    ];

    $valid_user = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $user_exist_validator,
                'loader' => $user_data_loader
              ]
            ],
            'error' => 'Niewłaściwe dane logowania'
          ]

        ],

        'conds' => $data_not_empty
      ]
    ];

    $b = ErrorsCreator::create($valid_user);

    if($b) {
      $login_proccess->execute($user_data_loader);
    }

    return null;
  }
}

?>
