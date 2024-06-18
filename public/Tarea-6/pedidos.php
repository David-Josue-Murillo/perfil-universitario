<?php
include "instalacion.php";

$query = "SELECT * FROM formulario_pedido";
$result = $conexion->query($query);

$areas = array();
while($row = $result->fetch_assoc()){
    $areas[] = $row;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedidos</title>
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
            text-align: center;
        }

        main {
            width: 100%;
            display: inline-flex;
            justify-content: center;
        }

        table {
            width: 80%;
            margin: 10px auto;
            border-collapse: collapse;
            font-size: 18px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border: 2px solid #17C3B2;
        }

        thead tr {
            background-color: #009879;
            /* Verde vibrante */
            color: #ffffff;
            text-align: left;
        }

        th,
        td {
            padding: 12px 15px;
            border: 2px solid #333333;
        }

        tbody tr {
            background-color: #f3f3f3;
            color: #333333;
        }

        tbody tr:nth-of-type(even) {
            background-color: #e9e9e9;
            /* Alternar fondo */
        }

        tbody tr:hover {
            background-color: #f1f1f1;
            /* Fondo al pasar el mouse */
        }

        tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        .button {
            --color: green;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 80%;
            margin: auto;
            margin-top: 0.5rem;
            background-color: transparent;
            border-radius: .3em;
            cursor: pointer;
            transition: .5s;
            font-weight: 400;
            font-size: 16px;
            border: 1px solid;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: var(--color);
        }

        .button:hover {
            color: rgb(10, 25, 30);
        }

        .button_delete{
            --color: red;
        }

    </style>
</head>

<body>
    <header>
        <h1>Pedidos</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Libro de PHP</th>
                    <th>Libro de JS</th>
                    <th>Lenguajes favoritos</th>
                    <th>Genero</th>
                    <th>Materia Favorita</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                foreach ($areas as $key => $value) {
                    $id = $value["id"];
                    echo "
                        <tr>
                            <th id='".$id."'>". $value["nombre"] . "</th>
                            <th id='".$id."'>". $value["libro_php"] . "</th>
                            <th id='".$id."'>". $value["libro_js"] . "</th>
                            <th id='".$id."'>". $value["language_fav"] . "</th>
                            <th id='".$id."'>". $value["genero"] . "</th>
                            <th id='".$id."'>". $value["materia_fav"] . "</th>
                            <th class='btn_table'>
                                <form'>
                                    <input class='button' type='submit' name='".$id."' value='Modificar' id='modificar'>
                                    <input class='button button_delete' type='submit' name='eliminar' value='Eliminar'>
                                </form>
                            </th>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>