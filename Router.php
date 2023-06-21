<?php
class CreateRouter {
    private $baseURI;
    private $routes;
  
    function __construct($baseURI) {
        $this->baseURI = $baseURI;
        $this->routes = [];
    }

    function get($route, $handler) {
      $this->routes[$this->baseURI . $route] = 'pages/' . $handler;
    }

    function post($route, $handler) {
        $this->routes[$this->baseURI . $route] = 'controllers/' . $handler;
    }

    function listen() {
        $URI = $_SERVER['REQUEST_URI'];
        $parsed = explode("?", $URI);
        $rote = $parsed[0];

        if (isset($this->routes[$rote])) {
            $params = array();

            if (isset($parsed[1])) {
                $arr = explode('&', $parsed[1]); 
                
                foreach($arr as $item){
                    $valor = explode('=', $item); 
                    $params[$valor[0]] = $valor[1];
                }
            }

            include($this->routes[$rote]);
        } else {
            include('pages/404.html');
        }
    }
}