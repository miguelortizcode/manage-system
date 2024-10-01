<?php 
session_start(); // Inicia sesion si es necesario


// cargar el archivo de rutas principal (desde la raiz)
require_once '../routes/web.routes.php'; // cargar rutas globales

//resolver las rutas
$router->resolve();

