<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root{
            color-scheme: light dark;
        }

        .container{
            width: 50%;
            margin: auto;
        }
    </style>
</head>
<body>
    <body class="container">
        <div class="">
            <h1 class="">Actividades de los 50 años del CRUV</h1>
            <form action="registro.php" method="post">
                <fieldset class="internileado">
                    <legend class="">Datos Personales: </legend>
                    <label for="name">
                        <span>Nombre:</span>
                        <input type="text" name="name" required>
                    </label>
                    <label for="name">
                        <span>Sexo:</span>
                        <select name="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </label>
                </fieldset>

                <fieldset class="internileado">
                    <legend class="">Estamento:</legend>
                    <label class="">
                        <input type="radio" name="role" value="estudiante">
                        <span class="">Estudiante</span>
                    </label>
                    <label class="">
                        <input type="radio" name="role" value="docente" class="">
                        <span class="">Docente</span>
                    </label>
                    <label class="">
                        <input type="radio" name="role" value="administrador" class="">
                        <span class="">Administrativo</span>
                    </label>
                </fieldset>
    
                <fieldset class="internileado">
                    <legend class="">Actividades de Aniversario en que participará:</legend>
                    <label class="">
                        <input type="checkbox" name="paseo">    
                        Paseo de Antorchas
                    </label>
                    <label class="">
                        <input type="checkbox" name="caminata">
                        Caminata
                    </label>
                    <label class="">
                        <input type="checkbox" name="convivio">
                        Convivio el 15 de octubre
                    </label>
                    <label class="">
                        <input type="checkbox" name="misa">
                        Misa
                    </label>
                    <label class="">
                        <input type="checkbox" name="cena">
                        Cena 17 de octubre
                    </label>
                </fieldset>
    
                <div class="internileado">
                    <label class="">Otra actividad sugerida:</label>
                    <input type="text" name="sugerencia">
                </div>
    
                <div class="">
                    <label class="">Horario en que sugiere se realice la misa:</label>
                    <select name="opcion">
                        <option>Matutino</option>
                        <option>Vespertino</option>
                        <option>Nocturno</option>
                    </select>
                </div>
                <br>
                <input type="submit" name="submit_actividad">
            </form>
        </div>
    </body>     
</body>
</html>