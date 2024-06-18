<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <title>Document</title>
    <style>
        body{
            margin: auto;
            text-align: center;
        }

        table{
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Registros en la tabla PLAN2402010001</h1>
    <table id="myTable" class="display" style="width:90%">
        <thead>
            <tr>
                <th>Plan Anual</th>
                <th>Plan Semestral</th>
                <th>Codigo Asignación</th>
                <th>Nombre Asignación</th>
                <th>Creditos</th>
                <th>Tipo</th>
                <th>Pre Requisito</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.php";
            $sql = "SELECT * FROM PLAN2402010001";
            $result = $conexion->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>{$row['ano_plan']}</td>";
                        echo "<td>{$row['semestre_plan']}</td>";
                        echo "<td>{$row['codigo_asig']}</td>";
                        echo "<td>{$row['nombre_asig']}</td>";
                        echo "<td>{$row['creditos']}</td>";
                        echo "<td>{$row['tipo']}</td>";
                        echo "<td>{$row['prerequisito']}</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>

