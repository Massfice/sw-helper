<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;
use app\bundles\ViewResolver\ViewResolver;

class RegisterLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {

    $user_exist_validator = $validators->getValidator('user_exist_validator');
    $pass_equals_validator = $validators->getValidator('pass_equals_validator');
    $login_not_empty_validator = $validators->getValidator('login_not_empty_validator');
    $password_not_empty_validator = $validators->getValidator('password_not_empty_validator');
    $repassword_not_empty_validator = $validators->getValidator('repassword_not_empty_validator');

    $user_data_loader = $loaders->getParamLoader('user_data_loader');

    $register_proccess = $proccesses->getProccess('register_proccess');

    $pass_not_empty = [
      [
        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $password_not_empty_validator,
                'loader' => $user_data_loader
              ]
            ],
            'error' => 'Musisz podać hasło'
          ],

          [
            'minitests' => [
              [
                'validator' => $repassword_not_empty_validator,
                'loader' => $user_data_loader
              ]
            ],
            'error' => 'Musisz powtórzyć hasło'
          ]

        ]
      ]
    ];

    $login_not_empty = [
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
          ]

        ]
      ]
    ];

    $ok = [
      [

        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $pass_equals_validator,
                'loader' => $user_data_loader
              ]
            ],
            'error' => 'Podane hasła się nie zgadzają'
          ]

        ],

        'conds' => $pass_not_empty

      ],

      [

        'tests' => [

          [
            'minitests' => [
              [
                'validator' => $user_exist_validator,
                'loader' => $user_data_loader,
                'negate' => true
              ]
            ],
            'error' => 'Podany użytkownik już istnieje'
          ]

        ],

        'conds' => $login_not_empty

      ]
    ];

    $b = ErrorsCreator::create($ok);

    if($b) {
      $register_proccess->execute($user_data_loader);
    }

    return null;
  }
}

?>
