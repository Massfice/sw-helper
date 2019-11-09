<?php

namespace app\SWHelperFeatures\PostGenerator\Specials;

use app\SWHelperFeatures\PostGenerator\Special;

class TestSpecial implements Special {

  private $people;

  public function __construct() {
    $this->people = [
      [
        'name' => 'Adrian',
        'surname' => 'Larysz'
      ],
      [
        'name' => 'Anna',
        'surname' => 'Larysz'
      ],
      [
        'name' => 'Kamil',
        'surname' => 'Larysz'
      ],
      [
        'name' => 'Jakub',
        'surname' => 'Larysz'
      ],
      [
        'name' => 'Adrian',
        'surname' => 'Polednik'
      ]
    ];
  }

  public function getName() : string {
    return 'test_special';
  }

  public function generate(string $string) : string {
    $buff = '';
    foreach($this->people as $person) {
      $buff = $buff.$string;
      $buff = str_replace('[name]',$person['name'],$buff);
      $buff = str_replace('[surname]',$person['surname'],$buff);
    }

    return trim($buff);
  }
}

?>
