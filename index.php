<?php 
session_start(); // Iniciar sesión

require 'config/config.php'; // Cargar configuración de la base de datos
require 'routes/web.routes.php'; // Cargar las rutas

try {
    $router->resolve(); // Resolver las rutas
} catch (Exception $e) {
    error_log($e->getMessage()); // Registrar el error
    http_response_code(500); // Código de respuesta del servidor
    echo "Se produjo un error en el servidor.";
}
