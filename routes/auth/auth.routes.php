<?php
global $viewsController;
global $router;

function AuthRouter($router, $viewsController){
    $router->get('/', function() use($viewsController){
        $viewsController->showLogin(); // Muestra la vista del login
    });

    $router->get('/dashboard', function() use($viewsController){
        $viewsController->showDashboard(); // Muestra la vista del login
    });


    $router->post('/login', function() use($viewsController){
        $viewsController->handleLogin();
    });
}