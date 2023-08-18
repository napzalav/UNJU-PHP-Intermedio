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
                <p>Estos son todos los FAMILIARES almacenados en la DB</p>
            </div>
        </div>

        <a href="./index.php">Volver a HOME</a>
    </header>

    <main>
        <div class="container">
            <h2>Ver Familiares</h2>

            <?php
            // Incluir el archivo de configuración para la conexión a la base de datos
            require_once "config.php";

            // Obtener los familiares de la base de datos
            $sqlFamiliares = "SELECT id_familia, nombre, rol, edad FROM familiares";
            $resultFamiliares = $mysqli->query($sqlFamiliares);

            if ($resultFamiliares->num_rows > 0) {
                echo '<table class="table table-bordered table-striped">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nombre</th>';
                echo '<th>Rol</th>';
                echo '<th>Edad</th>';
                echo '<th>Acción</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                while ($rowFamiliar = $resultFamiliares->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $rowFamiliar['id_familia'] . '</td>';
                    echo '<td>' . $rowFamiliar['nombre'] . '</td>';
                    echo '<td>' . $rowFamiliar['rol'] . '</td>';
                    echo '<td>' . $rowFamiliar['edad'] . '</td>';
                    echo '<td>';
                    echo '<a href="updateFam.php?id=' . $rowFamiliar['id_familia'] . '" class="mr-2" title="Editar"><span class="fa fa-pencil"></span></a>'; // Enlace a la página de edición
                    // echo '<a href="deleteFam.php?id=' . $rowFamiliar['id_familia'] . '" title="Borrar"><span class="fa fa-trash"></span></a>';
                    echo '<a href="deleteFam.php?id=' . $rowFamiliar['id_familia'] . '" class="mr-3" title="Borrar Registro" data-toggle="tooltip" onclick="return confirm(\'Realmente quiere borrar este familiar de la base de datos?\')"><span class="fa fa-trash"></span></a>';
                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p>No se encontraron familiares en la base de datos.</p>';
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