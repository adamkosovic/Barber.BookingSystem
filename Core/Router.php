<?php

class Router
{
  protected $routes = [];

  public function add($method, $uri, $controller)
  {
    $this->routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => $controller
    ];
  }

  public function get($uri, $controller)
  {
    $this->add('GET', $uri, $controller);
  }

  public function post($uri, $controller)
  {
    $this->add('POST', $uri, $controller);
  }

  public function route($uri, $method)
  {
    foreach($this->routes as $route){
      if($route['uri'] === $uri && $route['method'] === $method){
        return require base_path($route['controller']);
      }
    }
    abort();
  }
}

