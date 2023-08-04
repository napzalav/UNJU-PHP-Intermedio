<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 5</title>
</head>
<body>
    <h1>“Programacion Orientada a Objetos”</h1>

    <?php include 'menu.php'; ?>

    <h3>Consigna 1</h3>
    <p>Crear la clase Persona con las siguientes propiedades:</p>
    <ul>
        <li>nombre</li>
        <li>apellido</li>
        <li>edad</li>
    </ul>
    <p>y siguientes métodos:</p>
    <ul>
        <li><b>setName</b>, que debe permitir que la propiedad nombre represente su cadena de caracteres en minúscula.</li>
        <li><b>getName</b>, debe mostrar la cadena de caracteres antes ingresada con la primer letra de cada palabra en mayúscula.</li>
    </ul>

    <form action="desarrollo1.php" method="post">
        <label for="nombre">Ingrese su nombre</label>
        <input type="text" name="nombre" required>

        <br>
        <label for="apellido">Ingrese su apellido</label>
        <input type="text" name="apellido" required>

        <br>
        <label for="edad">Ingrese su edad</label>
        <input type="text" name="edad" required>
        <input type="submit" name="enviar">
    </form>
    <br>

    <p><i>*Siguiendo la consigna, completé la estructura para las propiedades apellido y edad agregando sus respectivos formularios</i></p>
    <ul>
        <li><b>setApellido</b> y <b>getApellido</b></li>
        <li><b>setEdad</b> y <b>getEdad</b></li>
    </ul>

</body>
</html>