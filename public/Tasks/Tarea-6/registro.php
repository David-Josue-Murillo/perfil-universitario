<?php

echo "<h1>Area de registros</h1>";

if(isset($_POST['submit_pedidos'])){
    if(
    isset($_POST['name']) && 
    (isset($_POST['unidad1']) || isset($_POST['unidad2'])) &&
    (isset($_POST['js']) || isset($_POST['php']) || isset($_POST['py']) || isset($_POST['cpp']) || isset($_POST['ko'])) &&
    isset($_POST['sexo']) &&
    isset($_POST['materia_fav'])){

        // Ingresar datos a la base de datos
        include 'instalacion.php';

        $nombre = $_POST['name'];
        $unidadPhp = $_POST['unidad1'];
        $unidadJs = $_POST['unidad2'];
        // Guardar los lenguajes seleccionado en un string
        $actividad = "";
        if(isset($_POST['js'])){
            $actividad .= "JavaScript, ";
        }
        if(isset($_POST['php'])){
            $actividad .= "PHP, ";
        }
        if(isset($_POST['py'])){
            $actividad .= "Python, ";
        }
        if(isset($_POST['cpp'])){
            $actividad .= "C++, ";
        }
        if(isset($_POST['ko'])){
            $actividad .= "Kotlin, ";
        }

        $sexo = $_POST['sexo'];
        $materiaFav = $_POST['materia_fav'];

        // Guardar los datos en la tabla
        $query = "INSERT INTO formulario_pedido(nombre, libro_php, libro_js, language_fav, genero, materia_fav) VALUES ('$nombre', '$unidadPhp', '$unidadJs', '$actividad', '$sexo', '$materiaFav')";

        if($conexion->query($query) === TRUE){
            echo "Datos ingresados en la tabla existosamente<br>";
        } else {
            echo "Erro al ingresar los datos en la tabla: ". $conexion->error;
        }

    } else {
        echo "Faltan datos en la tabla formulario_pedido<br>";
    }
}

if(isset($_POST['submit_actividad'])){
    if(
    isset($_POST['name']) && 
    isset($_POST['sexo']) &&
    isset($_POST['role']) &&
    (isset($_POST['paseo']) || isset($_POST['caminata']) || isset($_POST['convivio']) || isset($_POST['misa']) || isset($_POST['cena'])) &&
    isset($_POST['sugerencia']) &&
    isset($_POST['opcion'])){

        // Ingresar datos a la base de datos
        include 'instalacion.php';

        $nombre = $_POST['name'];
        $sexo = $_POST['sexo'];
        $role = $_POST['role'];

        // Guardar los lenguajes seleccionado en un string
        $actividad = "";
        if(isset($_POST['paseo'])){
            $actividad .= "Paseo, ";
        }
        if(isset($_POST['caminata'])){
            $actividad .= "Caminata, ";
        }
        if(isset($_POST['convivio'])){
            $actividad .= "Convivio, ";
        }
        if(isset($_POST['misa'])){
            $actividad .= "Misa, ";
        }
        if(isset($_POST['cena'])){
            $actividad .= "Cena, ";
        }

        $sugerencia = "";
        if(isset($_POST['sugerencia'])){
            $sugerencia = $_POST['sugerencia'];
        } else {
            $sugerencia = "Sin sugerencia registrada";
        }

        $turno = $_POST['opcion'];

        // Guardar los datos en la tabla
        $query = "INSERT INTO formulario_actividad (nombre, genero, estamento, actividad, actividad_sugerida, horario) VALUES 
        ('$nombre', '$sexo', '$role', '$actividad', '$sugerencia', '$turno')";

        if($conexion->query($query) === TRUE){
            echo "Datos ingresados en la tabla existosamente<br>";
        } else {
            echo "Erro al ingresar los datos en la tabla: ". $conexion->error;
        }

    } else {
        echo "Faltan datos en la tabla formulario_actividad<br>";
    }
}



header("Location: index.html");
?>