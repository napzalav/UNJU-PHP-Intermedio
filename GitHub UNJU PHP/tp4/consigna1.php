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

    <h3>Consigna 1</h3>
    <p>Recibir una cadena de caracteres en un formulario y:</p>
    <ol>
        <li>Controlar que no posea más de 80 caracteres.</li>
        <li>Convertir toda la cadena a mayúsculas.</li>
        <li>Eliminar los espacios en blanco tanto al principio como al final.</li>
    </ol>

    <form action="desarrollo1.php" method="post">
        <label for="cadena">Ingrese un texto de maximo 80 caracteres:</label>
        <input type="text" name="cadena">
        <input type="submit" name="convertir">
    </form>
    <br>

</body>
</html>