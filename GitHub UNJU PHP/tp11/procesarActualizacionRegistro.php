<?php
// Incluir el archivo de configuración para la conexión a la base de datos
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $id = $_POST["id"];
    $fecha = $_POST["fecha"];
    $tipo = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
    $monto = $_POST["monto"];
    $forma_de_pago = $_POST["forma_de_pago"];
    $responsable = $_POST["responsable"];

    // Preparar la consulta SQL para la actualización
    $sql = "UPDATE movimientos SET fecha = ?, tipo = ?, descripcion = ?, monto = ?, forma_de_pago = ?, id_familia = ? WHERE id_mov = ?";

    // Preparar la sentencia
    if ($stmt = $mysqli->prepare($sql)) {
        // Vincular los parámetros
        $stmt->bind_param("ssssssi", $fecha, $tipo, $descripcion, $monto, $forma_de_pago, $responsable, $id);

        // Ejecutar la sentencia
        if ($stmt->execute()) {
            // Redirigir a la página de ver movimientos (index.php) con un mensaje de éxito
            header("location: index.php?message=updated");
            exit();
        } else {
            echo "Error en la ejecución de la consulta: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
} else {
    echo "Acceso no válido.";
}
?>
