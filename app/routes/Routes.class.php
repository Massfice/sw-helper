<?php

namespace app\routes;

class Routes {

  private static $instance;

  private $routes;
  private $default;
  private $login;

  private function __construct() {
    $this->routes = [];
  }

  public static function getInstance() : self {
    if(!isset(self::$instance))
      self::$instance = new Routes;

    return self::$instance;
  }

  public function save(Route $route) : self {
    $this->routes[$route->getAction()] = $route;

    return $this;
  }

  public function setDefault(string $action) : self {
    if(isset($this->routes[$action]))
      $this->default = $action;

    return $this;
  }

  public function setLogin(string $action) : self {
    if(isset($this->routes[$action]))
      $this->login = $action;

    return $this;
  }

  public function getRoute(string $action) : Route {
    if(isset($this->routes[$action]))
      return $this->routes[$action];
    else
      return $this->routes[$this->default];
  }

  public function getLogin() : Route {
    return $this->routes[$this->login];
  }

}

?>
