<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'manage_system_db';
$connection = new mysqli($host, $username, $password, $database);

if($connection->connect_error){
    die('No se ha podido conectar a la base de datos' . $connection->connect_error);
}