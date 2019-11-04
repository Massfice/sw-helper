<?php

namespace app\bundles\Service\Custom\Logic;

use app\bundles\Service\ServiceLogic;
use app\bundles\Service\ParamLoaders;
use app\bundles\Service\Validators;
use app\bundles\Service\Proccesses;

class TestLogic implements ServiceLogic {
  public function execute(ParamLoaders $loaders, Validators $validators, Proccesses $proccesses) : ?array {
    $validator1 = $validators->getValidator('validator1');
    $validator2 = $validators->getValidator('validator2');
    $validator3 = $validators->getValidator('validator3');
    $loader = $loaders->getParamLoader('loader');
    $proccess = $proccesses->getProccess('test');

    $b = ErrorsCreator::create([

      [
        'tests' => [

          [
            'validator' => $validator1,
            'loader' => $loader,
            'error' => 'Liczba musi być mniejsza niż 10'
          ],

          [
            'validator' => $validator2,
            'loader' => $loader,
            'error' => 'Liczba musi być mniejsza niż 15'
          ]

        ],

        'conds' => [

          [

            'tests' => [

              [
                'validator' => $validator3,
                'loader' => $loader,
                'error' => 'Liczba musi być mniejsza niż 20'
              ]


            ]

          ]

        ]

      ],


      [
        'tests' => [

          [
            'validator' => $validator1,
            'loader' => $loader,
            'error' => 'Liczba musi być mniejsza niż 10'
          ],

          [
            'validator' => $validator2,
            'loader' => $loader,
            'error' => 'Liczba musi być mniejsza niż 15'
          ]

        ]

      ]

    ]);

    if($b) {
      $array = $proccess->execute($loader);
    } else {
      $array = null;
    }

    return $array;
  }
}

?>
