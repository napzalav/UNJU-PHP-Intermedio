<?php
// Incluir el archivo de configuración para la conexión a la base de datos
require_once "config.php";

// aqui verifico si se enviaron datos desde el formulario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $fecha = $_POST["fecha"];
    $tipo = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
    $monto = $_POST["monto"];
    $forma_de_pago = $_POST["forma_de_pago"];
    $responsable = $_POST["responsable"];

    // Preparar la consulta SQL para la inserción
    $sql = "INSERT INTO movimientos (fecha, tipo, descripcion, monto, forma_de_pago, id_familia) VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la sentencia
    if ($stmt = $mysqli->prepare($sql)) {
        // Vincular los parámetros
        $stmt->bind_param("sssssi", $fecha, $tipo, $descripcion, $monto, $forma_de_pago, $responsable); // Agregamos el parámetro

        // Ejecutar la sentencia
        if ($stmt->execute()) {
            // Redirigir a la página de listado (index.php) con un mensaje de éxito
            header("location: index.php?message=success");
            exit();
        } else {
            echo "Error en la ejecución de la consulta: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
}
?>