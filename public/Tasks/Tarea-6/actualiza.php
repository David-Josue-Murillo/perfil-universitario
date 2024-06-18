<?php

if(isset($_POST['modificar'])){
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];

        echo "La ID recibida es: " . htmlspecialchars($id);
    } else{
        echo "No hay id<br>";
    }
    echo "Click en modificar";
    
}

if(isset($_POST['eliminar'])){
    echo "Click en eliminar";
}

?>