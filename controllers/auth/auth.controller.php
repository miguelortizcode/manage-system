<?php

require_once 'config/database.php';

class viewController{
    public function showLogin(){
        require 'views/auth/login.php'; // Carga la vista del login
    }

    public function showDashboard(){
        require 'views/dashboard.php'; // carga la vista del login
    }

    public function handleLogin(){
        global $connection;

        if(isset($_POST['submit'])){
            if(isset($_POST['email'])  && isset($_POST['password'])){
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                // echo "El correo ingresado es:  $email <br>";
                // echo "La contraseña ingresada es:  $password <br>";

                if(empty($email)){
                    echo "El correo debe ser obligatorio <br>";
                    exit();
                } 

                if(empty($password)){
                    echo 'La contraseña debe ser obligatoria';
                    exit();
                }




            }
        }
    }
}