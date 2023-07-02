<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 4</title>
</head>
<body>
    <h1>“FUNCIONES INTERNAS PHP” </h1>
    <p>Click para visualizar las otras consignas:</p>

    <?php include 'menu.php'; ?>

    <h3>Consigna 4</h3>
    <p>Recibir un nro. de DNI en un formulario y:</p>
    <ol>
        <li>Eliminar los puntos.</li>
        <li>Para el caso de un DNI de 7 dígitos, imprimir un mensaje de “Trámite de jubilación”.</li>
        <li>En el caso que no se ingrese ningún valor indicar que el campo es obligatorio.</li>
    </ol>

    <form action="desarrollo4.php" method="post">
        <label for="dni">Ingrese el n° de DNI:</label>
        <!-- puedo agregar el "required" dentro del input para obligar a q este campo no esté vacio-->
        <!--puedo cambiar el type="text" por type="number" para garantizar que solo se ingresen numeros-->
        <input type="number" name="dni" required>
        <input type="submit" name="recibir">
    </form>
    <br>

</body>
</html>