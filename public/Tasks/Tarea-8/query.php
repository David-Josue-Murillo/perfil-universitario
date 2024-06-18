<?php
include "conexion.php";

// Listado de todas las tabla de la base de datos
/*$sql = "SHOW TABLES";
$result = $conexion->query($sql);

if($result->num_rows > 0){
    echo "<h1>Tablas en la base de datos</h1>";
    echo "<ul>";
    while($row = $result->fetch_assoc()){
        echo "<li>{$row['Tables_in_clase24x_Estudiantes']}</li>";
    }
    echo "</ul>";
}else{
    echo "No hay tablas en la base de datos";
}*/

$sql = "SELECT * FROM PLAN2402010001";
$result = $conexion->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $_SESSION['id'] = $row['id'];
    }
}