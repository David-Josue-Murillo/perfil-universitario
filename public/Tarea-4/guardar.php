<?php
    if(isset($_POST['name']) && isset($_POST['unidadJs']) && isset($_POST['unidadPhp'])){
        echo "<h1>Bienvenido(a) al sistema</h1>";
        echo "<h1>".$_POST['name']."</h1>";

        $cantidaJS = $_POST['unidadJs'];
        $cantidaPHP = $_POST['unidadPhp'];

        $resJS = $cantidaJS * 25;
        $resPHP = $cantidaPHP * 20;

        echo "<p>".$_POST['unidadJs']." Libros de JavaScript a 25 seria: ". $resJS ." </p>";
        echo "<p>".$_POST['unidadPhp']." Libros de PHP a 20 seria: ". $resPHP ." </p>";        
    } 

    if(isset($_POST['js']) || isset($_POST['php']) || isset($_POST['python']) || isset($_POST['cpp']) || isset($_POST['kotlin'])){
        echo "<h2>Tus lenguajes favoritos son: </h2>";
        if(isset($_POST['js'])){
            echo "<p>JavaScript</p>";
        } 
        
        if(isset($_POST['php'])){
            echo "<p>PHP</p>";
        } 
        
        if(isset($_POST['python'])){
            echo "<p>Python</p>";
        } 
        
        if(isset($_POST['cpp'])){
            echo "<p>C++</p>";
        } 
        
        if(isset($_POST['Kotlin'])){
            echo "<p>Kotlin</p>";
        }
    }

    if(isset($_POST['sexo'])){
        echo "<h2>Tu orentación sexual es :</h2>";
        if($_POST['sexo'] == "hombre"){
            echo "<p>Masculino</p>";
        } else if($_POST['sexo'] == "mujer"){
            echo "<p>Femenino</p>";
        } else{
            echo "<p>Eres tremendo jotoooooo GAYYYYYYYYYYYY</p>";
        }
    }

    if(isset($_POST['materia'])){
        echo "<h2>Tus materia favoritas es: </h2>";
        echo "<p>".$_POST['materia']."</p>";
    }
    

?>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        margin: auto;     
    }
</style>