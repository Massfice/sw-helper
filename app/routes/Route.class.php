<?php

namespace app\routes;

class Route {

  /**
  * action
  *
  * @var string
  */
  private $action;

  /**
  * controller
  *
  * @var string
  */
  private $controller;

    /**
    * roles
    *
    * @var array
    */
  private $roles;

  public function __construct(string $action, string $controller, array $roles = []) {
    $this->action = $action;
    $this->controller = $controller;
    $this->roles = $roles;

    Routes::getInstance()->save($this);
  }

  public function forward() {
    Forward::to($this);
  }

    /**
     * Get the value of action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get the value of controller
     *
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Get the value of roles
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

}

?>
