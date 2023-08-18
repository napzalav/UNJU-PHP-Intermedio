<?php
// Incluir el archivo de configuración para la conexión a la base de datos
require_once "config.php";

// Obtener el ID del familiar de la URL
$id = $_GET['id'];

// Aquí debes escribir el código para eliminar el familiar con el ID especificado
$sql = "DELETE FROM familiares WHERE id_familia = ?";
if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        // Redirigir a la página de ver familiares (index.php) con un mensaje de éxito
        header("location: index.php?message=deleted");
        exit();
    } else {
        echo "Error en la ejecución de la consulta: " . $stmt->error;
    }
    $stmt->close();
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Familiar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="container-cabecera">
            <h1>TP 11 - UNJU - PHP INTERMEDIO</h1>
            <h2>ABM con PHP y MYSQL</h2>
            <div class="consigna">
                <p>BORRAR familiar almacenado en la DB</p>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <?php
            if (isset($_GET['message']) && $_GET['message'] == 'deleted') {
                echo '<div class="alert alert-success" role="alert">El familiar ha sido borrado exitosamente.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Ha ocurrido un error al intentar borrar el familiar.</div>';
            }
            ?>

            <a href="index.php">Volver a la lista de familiares</a>
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
