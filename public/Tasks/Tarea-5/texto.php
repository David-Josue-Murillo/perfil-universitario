<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
</head>

<body>
    <div>
        <h1>Encuesta</h1>
        <div>
            <h2>Todos los registros</h2>
            <?php
            //Muestra la lista de todos los registros que tiene almacenado en el TXT.
            $actividadesArray = array();
            if(file_exists("actividades.txt") || file_exists("estamento.txt") || file_exists("horario.txt") || 
                file_exists("nombre.txt") || file_exists("sexo.txt")){

                $actividades = fopen("actividades.txt", "r");
                $estamento = fopen("estamento.txt", "r");
                $horario = fopen("horario.txt", "r");
                $name = fopen("nombre.txt", "r");
                $sexo = fopen("sexo.txt", "r");

                while(!feof($actividades)){
                    $lineaAct = fgets($actividades);
                    array_push($actividadesArray, $lineaAct);
                }

                // Leer el archivo hasta el final
                while(!feof($estamento) && !feof($horario) && !feof($name) && !feof($sexo)){
                    // Almacenar la linea en una variable
                    $lineaEstamento = fgets($estamento);
                    $lineaHorario = fgets($horario);
                    $lineaName = fgets($name);
                    $lineaSexo = fgets($sexo);
                    
                    echo "<p>Nombre: " . $lineaName . "</p>";
                    echo "<p>Sexo: " . $lineaSexo . "</p>";
                    echo "<p>Estamento: " . $lineaEstamento . "</p>";
                    echo "<p>Horario: " . $lineaHorario . "</p>";
                    echo "<hr>";
                }


                fclose($actividades);
                fclose($estamento);
                fclose($horario);
                fclose($name);
                fclose($sexo);
            }
            ?>


            <h2>Nombres de Encuestado</h2>
            <?php
                $nombres = array();

                if(file_exists("nombre.txt")){
                    $names = fopen("nombre.txt", "r");

                    // Leer el archivo hasta el final
                    while(!feof($names)){
                        // Almacenar la linea en una variable
                        $lineaName = fgets($names);

                        // Agregar los datos a las listas
                        array_push($nombres, $lineaName);
                    }

                    fclose($names);

                    echo "<ol>";
                    foreach($nombres as $nombre => $value){
                        if($value != "")
                            echo "<li>" . $value . "</li>";
                    }
                    echo "</ol>";
                } else {
                    echo "<h1>No hay actividades registradas</h1>";
                }
            ?>
        
            <h2>Encuestado por sexo</h2>
            <?php
            // Lista donde se almacennara los sexos
            $sexo = array();

            if (file_exists("sexo.txt")) {
                $sexs = fopen("sexo.txt", "r");

                // Leer el archivo hasta el final
                while (!feof($sexs)) {
                    // Almacenar la linea en una variable
                    $lineaSex = fgets($sexs);

                    // Agregar los datos a las listas
                    array_push($sexo, $lineaSex);
                }

                fclose($sexs);

                $cantMaculino = 0;
                $cantFemenino = 0;
                foreach ($sexo as $sex => $value) {
                    $value == "masculino\n" && $cantMaculino++;
                    $value == "femenino\n" && $cantFemenino++;
                }
                echo "<ul>";
                echo "<li>Hombres: " . $cantMaculino . "</li>";
                echo "<li>Mujeres: " . $cantFemenino . "</li>";
                echo "</ul>";
            } 
            ?>
            
            <h2>Encuestado por estamento</h2>
            <?php 
            $estamentos = array();

            if(file_exists("estamento.txt")){
                $estamento = fopen("estamento.txt", "r");

                // Leer el archivo hasta el final
                while(!feof($estamento)){
                    // Almacenar la linea en una variable
                    $lineaEstamento = fgets($estamento);

                    // Agregar los datos a las listas
                    array_push($estamentos, $lineaEstamento);
                }

                fclose($estamento);

                $cantEstudiantes = 0;
                $cantDocentes = 0;
                $cantAdministrativos = 0;
                foreach($estamentos as $estamento => $value){
                    $value == "estudiante\n" && $cantEstudiantes++;
                    $value == "docente\n" && $cantDocentes++;
                    $value == "administrador\n" && $cantAdministrativos++;
                }
                echo "<ul>";
                echo "<li>Estudiantes: " . $cantEstudiantes . "</li>";
                echo "<li>Docentes: " . $cantDocentes . "</li>";
                echo "<li>Administrativos: " . $cantAdministrativos . "</li>";
                echo "</ul>";
            }
            ?>

            <h2>Participantes registrado por actividad</h2>
            <?php 
            $actividades = array();

            if(file_exists("actividades.txt")){
                $act = fopen("actividades.txt", "r");

                // Leer el archivo hasta el final
                while(!feof($act)){
                    // Almacenar la linea en una variable
                    $lineaAct = fgets($act);

                    // Agregar los datos a las listas
                    array_push($actividades, $lineaAct);
                }

                fclose($act);

                $cantPaseo = 0;
                $cantCaminata = 0;
                $cantConvivio = 0;
                $cantMisa = 0;
                $cantCena = 0;
                foreach($actividades as $actividad => $value){
                    $value == "paseo\n" && $cantPaseo++;
                    $value == "caminata\n" && $cantCaminata++;
                    $value == "convivio\n" && $cantConvivio++;
                    $value == "misa\n" && $cantMisa++;
                    $value == "cena\n" && $cantCena++;
                }
                echo "<ul>";
                echo "<li>Paseo: " . $cantPaseo . "</li>";
                echo "<li>Caminata: " . $cantCaminata . "</li>";
                echo "<li>Convivio: " . $cantConvivio . "</li>";
                echo "<li>Misa: " . $cantMisa . "</li>";
                echo "<li>Cena: " . $cantCena . "</li>";
                echo "</ul>";   
            }
            
            ?>
        </div>
    </div>

    <div class="container">
        <a href="index.html">Regresar</a>
    </div>
</body>

</html>

<style>
    :root {
        color-scheme: light dark;
    }
</style>