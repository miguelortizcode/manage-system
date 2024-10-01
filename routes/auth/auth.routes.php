<?php
global $viewsController;
global $router;

function AuthRouter($router, $viewsController){
    $router->get('/', function() use($viewsController){
        $viewsController->showLogin(); // Muestra la vista del login
    });
}