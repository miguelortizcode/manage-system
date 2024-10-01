<?php

require_once 'controllers/auth/auth.controller.php'; // controlador de autenticacion
require_once 'auth/auth.routes.php'; // Rutas especificas de autenticacion

$viewsController = new viewController(); // Instanacia del controlador de autenticacion

class Router{
    private $routes = [];

    public function get($uri, $callback){
        $this->routes['GET'][$uri] = $callback;
    }

    public function post($uri, $callback){
        $this->routes['POST'][$uri] = $callback;
    }

    public function resolve(){
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if(isset($this->routes[$method][$uri])){
            call_user_func($this->routes[$method][$uri]);
            return;
        }
        http_response_code(404);
        echo '404 Not Found';
    }
}

$router = new Router(); // Crear la instacion del router
AuthRouter($router, $viewsController);