<?php 
    // Verificar los datos del formulario
    if(isset($_POST['role']) && isset($_POST['opcion'])){
        if(isset($_POST['paseo']) || isset($_POST['caminata']) || isset($_POST['convivio']) || isset($_POST['misa']) || isset($_POST['cena'])){
            // Guardar en un archivo de texto
            $file = fopen("actividades.txt", "a");
            $name = fopen("nombre.txt", "a");
            $sexo = fopen("sexo.txt", "a");
            $horario = fopen("horario.txt", "a");
            $estamento = fopen("estamento.txt", "a");

            // Escribir los datos personales
            fwrite($name, $_POST['name']."\n");
            fwrite($sexo, $_POST['sexo']."\n");

            // Escribir los datos en el archivo
            fwrite($estamento,$_POST['role']."\n");

            // Verificar las actividades seleccionadas
            isset($_POST['paseo']) && fwrite($file, "paseo\n");
            isset($_POST['caminata']) && fwrite($file, "caminata\n");
            isset($_POST['convivio']) && fwrite($file, "convivio\n");
            isset($_POST['misa']) && fwrite($file, "misa\n");
            isset($_POST['cena']) && fwrite($file, "cena\n");
            fwrite($file, "----------------\n");     
            
            // Verificar si agrego otra actividad sugerida
            /*if(isset($_POST['sugerencia'])){
                fwrite($file,$_POST['sugerencia']."\n");
            }*/

            // Escribir la opcion seleccionada
            fwrite($horario, $_POST['opcion']."\n");

            // Cerrar el archivo
            fclose($file);  
            fclose($horario);  
            fclose($name);  
            fclose($sexo);  
            fclose($estamento);
        }     

        if(isset($_POST['enviar'])){
            header("Location: texto.php");
        } else {
            header("Location: index.html");
            
        }
    }

?>  

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h1,h2,p,li{
        text-align: center;
    }

    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

</style>