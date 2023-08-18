<?php
// Incluir el archivo de configuración para la conexión a la base de datos
//aqui recibo y proceso los datos de edicion de un familiar (updateFam.php)
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $rol = $_POST["rol"];
    $edad = $_POST["edad"];

    // Preparar la consulta SQL para actualizar el familiar
    $sql = "UPDATE familiares SET nombre = ?, rol = ?, edad = ? WHERE id_familia = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("sssi", $nombre, $rol, $edad, $id);
        if ($stmt->execute()) {
            header("location: index.php"); // Redirigir a la página principal
            exit();
        } else {
            echo "Error en la ejecución de la consulta: " . $stmt->error;
        }
        $stmt->close();
    }

    $mysqli->close();
}
?>
