<?php 

$servername = "localhost";
$username = "root";
$password = "root";

$conexion = new mysqli($servername, $username, $password, "");

if($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);
} else {
    //echo "Conexion exitosa<br>";
}

//Crear la la base de datos
$query = "CREATE DATABASE IF NOT EXISTS tarea_6";
if($conexion->query($query) === TRUE){
    //echo "Base de datos creada<br>";
} else {
    echo "Error al crear la base de datos: " . $conexion->error;
}
$conexion = new mysqli($servername, $username, $password, "tarea_6");

// Crear la tabla
$query = "CREATE TABLE IF NOT EXISTS formulario_pedido(
    id INT(2) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    libro_php INT(4) NOT NULL,
    libro_js INT(4) NOT NULL,
    language_fav VARCHAR(15) NOT NULL,
    genero VARCHAR(25) NOT NULL,
    materia_fav VARCHAR(35) NOT NULL
)";

if($conexion->query($query) === TRUE){
    //echo "Tabla fue creada exitosamente<br>";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}

$query = "CREATE TABLE IF NOT EXISTS formulario_actividad(
    id INT(2) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    genero VARCHAR(25) NOT NULL,
    estamento VARCHAR(15) NOT NULL,
    actividad VARCHAR(50) NOT NULL,
    actividad_sugerida TEXT(255) NOT NULL,
    horario VARCHAR(15) NOT NULL
)";

if($conexion->query($query) === TRUE){
    //echo "Tabla fue creada exitosamente<br>";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}

?>