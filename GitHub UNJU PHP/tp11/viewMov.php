<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Familiares</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="container-cabecera">
            <h1>ABM con PHP y MYSQL</h1>
            <h2>TP 11 - UNJU - PHP INTERMEDIO</h2>
            <div class="consigna">
                <p>Estos son todos los MOVIMIENTOS almacenados en la DB</p>
            </div>
        </div>
        <a href="./index.php">Volver a HOME</a>
    </header>

    <main>
        <div class="container">
            <h2>Ver Movimientos</h2>
            <a href="./createMov.php" class="btn btn-success pull-right"><i class="fa fa-plus">Agregar nuevo movimiento</i></a>

            <?php
            //include config table
            require_once "config.php";
            error_reporting(E_ALL);
            ini_set('display_errors', '1');

            //Attempts select query execution
            $sql = "SELECT movimientos.id_mov as id_mov, fecha, tipo, descripcion, monto, forma_de_pago, familiares.nombre as nombre FROM familiares LEFT JOIN movimientos ON movimientos.id_familia = familiares.id_familia ORDER BY fecha DESC";
            if ($result = $mysqli->query($sql)) {
                if ($result->num_rows > 0) {
                    echo '<table class="table table-bordered table-striped">';
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>#</th>";
                    echo "<th>Fecha</th>";
                    echo "<th>Tipo</th>";
                    echo "<th>Descripcion</th>";
                    echo "<th>Monto</th>";
                    echo "<th>Forma Pago</th>";
                    echo "<th>Responsable</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while ($row = $result->fetch_array()) {
                        echo "<td>" . $row['id_mov'] . "</td>";
                        echo "<td>" . $row['fecha'] . "</td>";
                        echo "<td>" . $row['tipo'] . "</td>";
                        echo "<td>" . $row['descripcion'] . "</td>";
                        echo "<td>" . $row['monto'] . "</td>";
                        echo "<td>" . $row['forma_de_pago'] . "</td>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>";
                        echo '<a href="viewRegistro.php?id=' . $row['id_mov'] . '" class="mr-3" title="Ver Registro" data-toogle=tooltip"><span class="fa fa-eye"></span></a>';
                        echo '<a href="updateRegistro.php?id=' . $row['id_mov'] . '" class="mr-3" title="Actualizar Registro" data-toogle=tooltip"><span class="fa fa-pencil"></span></a>';
                        echo '<a href="deleteRegistro.php?id=' . $row['id_mov'] . '" class="mr-3" title="Borrar Registro" data-toggle="tooltip" onclick="return confirm(\'Realmente quiere borrar este movimiento de la base de datos?\')"><span class="fa fa-trash"></span></a>';

                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    //Free result set
                    $result->free();
                } else {
                    echo '<div class="alert alert-danger"><em>No se encontraron registros</em></div>';
                }
            }

            // Cerrar la conexión a la base de datos
            $mysqli->close();

            ?>
        </div>
    </main>

    <footer>
        <h5>Cesar Alavila | © Argentina Programa 2023</h5>
        <h6>PHP INTERMEDIO | Universidad Nacional de Jujuy</h6>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>