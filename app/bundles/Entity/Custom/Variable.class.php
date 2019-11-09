<?php

namespace app\bundles\Entity\Custom;

use app\bundles\Entity\Entity;

class Variable extends Entity {

  private $id;
  private $set_id;
  private $name;
  private $begin;
  private $end;
  private $position;

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
      'table' => 'variable_table',
      'data' => [
        'set_id',
        'name',
        'begin',
        'end',
        'position'
      ],
      'where' => [
        'id' => $this->id
      ]
    ];
  }

  protected function getCreateConfig() : ?array {
    return [
      'set_id' => $this->set_id,
      'name' => $this->name,
      'begin' => $this->begin,
      'end' => $this->end
    ];
  }

  protected function getUpdateConfig() : ?array {
    return [
      'table' => 'variable_table',
      'data' => [
        'name' => $this->name,
        'begin' => $this->begin,
        'end' => $this->end,
        'position' => $this->position

      ],
      'where' => [
        'id' => $this->id
      ]
    ];
  }

  protected function getDeleteConfig() : ?array {
    return [
      'table' => 'variable_table',
      'where' => [
        'id' => $this->id
      ]
    ];
  }

  protected function onSelect(?array $array) {
    $this->set_id = $array[0]['set_id'] + 0;
    $this->name = $array[0]['name'];
    $this->begin = $array[0]['begin'];
    $this->end = $array[0]['end'];
    $this->position = $array[0]['position'] + 0;
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
    return !isset($this->id) && isset($this->set_id) && isset($this->name) && isset($this->begin) && isset($this->end);
  }

  protected function shouldDelete() : bool {
    return $this->shouldUpdate();
  }

  //Setters and Getters

  public function setName(string $name) : self {
    $this->name = $name;
    return $this;
  }

  public function setSetId(int $set_id) : self {
    $this->set_id = $set_id;
    return $this;
  }

  public function setBegin(string $begin) : self {
    $this->begin = $begin;
    return $this;
  }

  public function setEnd(string $end) : self {
    $this->end = $end;
    return $this;
  }

  public function setPosition(int $position) {
    $this->position = $position;
  }

  public function getName() : string {
    return $this->name;
  }

  public function getSetId() : int {
    return $this->setr_id;
  }

  public function getBegin() : string {
    return $this->begin;
  }

  public function getEnd() : string {
    return $this->end;
  }

  public function getPosition() : int {
    return $this->position;
  }

  public function getId() : int {
    return $this->id;
  }
}

?>
