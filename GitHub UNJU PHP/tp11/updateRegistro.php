<?php
require_once "config.php";

// Obtener el ID del registro de la URL
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
        $registro_no_encontrado = true;
    }
} else {
    $registro_no_encontrado = true;
}

//para obtener el nomnre del responsable prellenado en el foemulario de edicion
function obtenerNombreResponsable($id_familia)
{
    global $mysqli;

    $nombre = "Desconocido"; // Inicializamos la variable con un valor por defecto

    $sql = "SELECT nombre FROM familiares WHERE id_familia = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $id_familia);
        $stmt->execute();
        $stmt->bind_result($nombre);
        $stmt->fetch();
        $stmt->close();
        return $nombre;
    }

    return "Desconocido"; // Valor predeterminado en caso de error
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="container-cabecera">
            <h1>ABM con PHP y MYSQL</h1>
            <h2>TP 11 - UNJU - PHP INTERMEDIO</h2>
            <div class="consigna">
                <p>MODIFICAR el registro almacenado en la DB</p>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Actualizar Registro</h2>

            <?php
            if (isset($registro_no_encontrado) && $registro_no_encontrado) {
                echo '<p>No se encontró el registro.</p>';
            } else {
                // Mostrar formulario de actualización con los campos prellenados
                ?>
                <form action="procesarActualizacionRegistro.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $registro['id_mov']; ?>">

                    <div class="mb-3">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" value="<?php echo $registro['fecha']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tipo">Tipo</label>
                        <select class="form-select" aria-label="Tipo" name="tipo">
                            <option value="ingreso" <?php if ($registro['tipo'] == 'ingreso')
                                echo 'selected'; ?>>Ingreso
                            </option>
                            <option value="egreso" <?php if ($registro['tipo'] == 'egreso')
                                echo 'selected'; ?>>Egreso
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion"
                            value="<?php echo $registro['descripcion']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="monto">Monto</label>
                        <input type="float" class="form-control" id="monto" name="monto"
                            value="<?php echo $registro['monto']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="forma_de_pago">Forma de Pago</label>
                        <input type="text" name="forma_de_pago" id="forma_de_pago"
                            value="<?php echo $registro['forma_de_pago']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="responsable">Responsable</label>
                        <select class="form-select" name="responsable" id="responsable">
                            <?php
                            $sql = "SELECT id_familia, nombre FROM familiares";
                            $result = $mysqli->query($sql);
                            while ($familiar = $result->fetch_assoc()) {
                                $selected = ($familiar['id_familia'] == $registro['id_familia']) ? 'selected' : '';
                                echo '<option value="' . $familiar['id_familia'] . '" ' . $selected . '>' . $familiar['nombre'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>

                <?php
            }
            ?>

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