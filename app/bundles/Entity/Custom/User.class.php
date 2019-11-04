<?php

namespace app\bundles\Entity\Custom;

use app\bundles\Entity\Entity;

class User extends Entity {

  private $id;
  private $login;
  private $password;

  protected function init($seed) {
    if(isset($seed)) {

      if(is_array($seed) && isset($seed['login']) && isset($seed['password'])) {
        $this->login = $seed['login'];
        $this->password = sha1($seed['password']);
      } else if(is_numeric($seed)) {
        $seed = $seed + 0;
        if(is_int($seed) && $seed > 0) {
          $this->id = $seed;
        }
      }

    }
  }

  protected function getSelectConfig() : ?array {
    return [
      'table' => 'user_table',
      'data' => [
        'id',
        'login',
        'password'
      ],
      'where' => [
        'OR' => [
          'AND' => [
            'login' => $this->login,
            'password' => $this->password
          ],
          'id' => $this->id
        ]
      ]
    ];
  }

  protected function getCreateConfig() : ?array {
    return [
      'table' => 'user_table',
      'data' => [
        'login' => $this->login,
        'password' => $this->password
      ]
    ];
  }

  protected function getUpdateConfig() : ?array {
    return [
      'table' => 'user_table',
      'data' => [
        'login' => $this->login,
        'password' => $this->password
      ],
      'where' => [
        'id' => $this->id
      ]
    ];
  }

  protected function getDeleteConfig() : ?array {
    return [
      'table' => 'user_table',
      'where' => [
        'id' => $this->id
      ]
    ];
  }

  protected function onSelect(?array $array) {
    $this->id = $array[0]['id'];
    $this->login = $array[0]['login'];
    $this->password = $array[0]['password'];
  }

  protected function onCreate(?array $array) {
    $this->id = $array['id'];
  }

  protected function onUpdate(?array $array) {

  }

  protected function shouldUpdate() : bool {
    return isset($this->id) && is_int($this->id) && $this->id > 0;
  }

  protected function shouldCreate() : bool {
    return !isset($this->id) && isset($this->login) && isset($this->password);
  }

  protected function shouldDelete() : bool {
    return $this->shouldUpdate();
  }

  //Setters and Getters

  public function setPassword(string $password) : self {
    $this->password = sha1($password);
    return $this;
  }

  public function setLogin(string $login) : self {
    $this->login = $login;
    return $this;
  }

  public function getPassword() : string {
    return $this->password;
  }

  public function getLogin() : string {
    return $this->login;
  }

  public function getId() : int {
    return $this->id;
  }
}

?>
