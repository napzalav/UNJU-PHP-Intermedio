<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <header>
        <div class="container-cabecera">
            <h1>ABM con PHP y MYSQL</h1>
            <h2>TP 11 - UNJU - PHP INTERMEDIO</h2>
            <div class="consigna">
                <p>Este es el REGISTRO almacenado en la DB</p>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Ver Registro</h2>

            <div class="registro">
                <?php

                if (isset($_GET['id']) && !empty($_GET['id'])) {
                    $id = $_GET['id'];

                    $sql = "SELECT * FROM movimientos WHERE id_mov = ?";
                    if ($stmt = $mysqli->prepare($sql)) {
                        $stmt->bind_param("i", $id);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $registro = $result->fetch_assoc();
                        $stmt->close();
                    }

                    if (!$registro) {
                        echo '<p>No se encontró el registro.</p>';
                    } else {
                        // Obtener el nombre del responsable
                        $sql_responsable = "SELECT nombre FROM familiares WHERE id_familia = ?";
                        if ($stmt_responsable = $mysqli->prepare($sql_responsable)) {
                            $stmt_responsable->bind_param("i", $registro['id_familia']);
                            $stmt_responsable->execute();
                            $result_responsable = $stmt_responsable->get_result();
                            $responsable = $result_responsable->fetch_assoc();
                            $stmt_responsable->close();
                        }

                        // Mostrar los detalles del registro
                        echo "<p>Fecha: " . $registro['fecha'] . "</p>";
                        echo "<p>Tipo: " . $registro['tipo'] . "</p>";
                        echo "<p>Descripción: " . $registro['descripcion'] . "</p>";
                        echo "<p>Monto: " . $registro['monto'] . "</p>";
                        echo "<p>Forma de pago: " . $registro['forma_de_pago'] . "</p>";
                        echo "<p>Responsable: " . $responsable['nombre'] . "</p>";
                    }
                } else {
                    echo '<p>ID de registro no proporcionado.</p>';
                }
                ?>
            </div>

            <a href="./viewMov.php">Volver a la lista de movimientos</a>
            <a href="./index.php">Volver a HOME</a>

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