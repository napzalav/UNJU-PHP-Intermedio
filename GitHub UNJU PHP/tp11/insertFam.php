<?php
// Incluir el archivo de configuración para la conexión a la base de datos
require_once "config.php";

// aqui verifico si se enviaron datos desde el formulario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $rol = $_POST["rol"];
    $edad = $_POST["edad"];

    // Preparar la consulta SQL para la inserción
    $sql = "INSERT INTO familiares (nombre, rol, edad) VALUES (?, ?, ?)";

    // Preparar la sentencia
    if ($stmt = $mysqli->prepare($sql)) {
        // Vincular los parámetros
        $stmt->bind_param("sss", $nombre, $rol, $edad); // Corregir el tipo de datos

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