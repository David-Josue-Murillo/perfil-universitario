<?php
    if(isset($_POST['modificar'])){
        
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        :root {
            color-scheme: light dark;
        }

        .form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        .input {
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .btn {
            display: flex;
            margin: auto;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .listForm{
            width: 40px;
        }

        label{
            display: inline-block;
            margin-top: 10px;
        }
        
    </style>
</head>

<body>
    <div class="form">
        <h1>Formulario   de Pedidos</h1>
        <form action="registro.php" method="post">
            <div class="input">
                <div>
                    <label for="name">Nombre usuario: </label>
                    <input type="text" name="name" required>
                </div>

                <div class="listaForm">
                    <p>Listado de libros disponibles: </p>
                    <ul>
                        <li>
                            <label for="php">Programación PHP................ UNIDADES: </label>
                            <input class="listForm" type="number" name="unidad1">
                        </li>
                        <li>
                            <label for="js">Programación JavaScript.... UNIDADES: </label>
                            <input class="listForm" type="number" name="unidad2">
                        </li>
                        <li>
                            <label for="js">Seleccione su lenguaje favorito: </label><br>
                            <input class="listForm" type="checkbox" name="js" value="javascript">Javascript <br>   
                            <input class="listForm" type="checkbox" name="php" value="php">PHP <br>
                            <input class="listForm" type="checkbox" name="py" value="python">Python <br>
                            <input class="listForm" type="checkbox" name="cpp" value="C++">C++ <br>
                            <input class="listForm" type="checkbox" name="ko" value="kotlin">Kotlin <br>
                        </li>
                        <li>
                            <label for="sexo">Selecciones su género: </label><br>
                            <input type="radio" name="sexo" value="hombre">Hombre <br>
                            <input type="radio" name="sexo" value="mujer">Mujer <br>
                            <input type="radio" name="sexo" value="gay">prefiero no decirlo <br>
                        </li>
                        <li>
                            <label for="materia_fav">Seleccone su materia favorito: </label><br>
                            <select name="materia_fav" id="materia" required>
                                <option value="inselect">Seleccione una materia</option>
                                <option value="programacion">Programación</option>
                                <option value="tecnologia">Tecnologia Web</option>
                                <option value="sistema">Sistema Operativo</option>
                                <option value="redes">Redes de Computadora</option>
                                <option value="basedatos">Base de Datos</option>
                        </li>
                    </ul>
                </div>
            </div>  

            <input type="submit" value="Enviar" name="submit_pedidos" class="btn">
        </form>
    </div>
</body>

</html>