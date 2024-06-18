<?php

// Variables de conexión
$server = "clase24.xyz";
$user = "clase24x_david";
$password = "64224268";
$nameDB = "clase24x_Estudiantes";

//Conectar a sistema de gestor de base de datoa
$conexion = new mysqli($server, $user, $password, $nameDB);

//Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// codificar la conexión a utf-8
$conexion->set_charset("utf8");