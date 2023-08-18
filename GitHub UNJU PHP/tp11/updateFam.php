<?php
// Incluir el archivo de configuración para la conexión a la base de datos
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Familiar</title>

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
                <p>EDITAR familiar almacenado en la DB</p>
            </div>
        </div>
        <a href="./index.php">Volver a HOME</a>
        <a href="./viewFam.php">Ver Familiares</a>
    </header>

    <main>
        <div class="formulario">
            <?php
            // Obtener el ID del familiar de la URL
            $id = $_GET['id'];

            // Consultar la base de datos para obtener los datos del familiar con el ID especificado
            $sql = "SELECT id_familia, nombre, rol, edad FROM familiares WHERE id_familia = ?";
            if ($stmt = $mysqli->prepare($sql)) {
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                $familiar = $result->fetch_assoc();
                $stmt->close();
            }

            if (!$familiar) {
                echo '<p>No se encontró el familiar.</p>';
            } else {
                ?>

                <form action="procesarEdicionFam.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $familiar['id_familia']; ?>">
                    <div class="mb-3">
                        <label for="nombre">Nombre y Apellido</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $familiar['nombre']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="rol">Rol</label>
                        <select class="form-select" aria-label="Rol" name="rol">
                            <option value="padre/madre" <?php if ($familiar['rol'] == 'padre/madre')
                                echo 'selected'; ?>>
                                Padre/Madre</option>
                            <option value="hijo/hija" <?php if ($familiar['rol'] == 'hijo/hija')
                                echo 'selected'; ?>>Hijo/Hija
                            </option>
                            <option value="otro/otra" <?php if ($familiar['rol'] == 'otro/otra')
                                echo 'selected'; ?>>Otro/Otra
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad"
                            value="<?php echo $familiar['edad']; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
                <?php
            }
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