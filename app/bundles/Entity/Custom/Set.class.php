<?php

namespace app\bundles\Entity\Custom;

use app\bundles\Entity\Entity;

class Set extends Entity {

  private $id;
  private $name;
  private $user_id;

  protected function init($seed) {
    if(isset($seed)) {

      if(is_numeric($seed)) {
        $seed = $seed + 0;
        if(is_int($seed) && $seed > 0) {
          $this->id = $seed;
        }
      }
    }
  }

  protected function getSelectConfig() : ?array {
    return [
      'table' => 'set_table',
      'data' => [
        'user_id',
        'name'
      ],
      'where' => [
        'id' => $this->id
      ]
    ];
  }

  protected function getCreateConfig() : ?array {
    return [
      'table' => 'set_table',
      'data' => [
        'user_id' => $this->user_id,
        'name' => $this->name
      ]
    ];
  }

  protected function getUpdateConfig() : ?array {
    return [
      'table' => 'set_table',
      'data' => [
        'name' => $this->name
      ],
      'where' => [
        'id' => $this->id
      ]
    ];
  }

  protected function getDeleteConfig() : ?array {
    return [
      'id' => $this->id
    ];
  }

  protected function onSelect(?array $array) {
    $this->user_id = $array[0]['user_id'] + 0;
    $this->name = $array[0]['name'];
  }

  protected function onCreate(?array $array) {
    $this->id = $array['id'] + 0;
  }

  protected function onUpdate(?array $array) {

  }

  protected function shouldUpdate() : bool {
    return isset($this->id) && is_int($this->id) && $this->id > 0;
  }

  protected function shouldCreate() : bool {
    return !isset($this->id) && isset($this->user_id) && isset($this->name);
  }

  protected function shouldDelete() : bool {
    return $this->shouldUpdate();
  }

  //Setters and Getters

  public function setName(string $name) : self {
    $this->name = $name;
    return $this;
  }

  public function setUserId(int $user_id) : self {
    $this->user_id = $user_id;
    return $this;
  }

  public function getName() : string {
    return $this->name;
  }

  public function getUserId() : int {
    return $this->user_id;
  }

  public function getId() : int {
    return $this->id;
  }
}

?>
