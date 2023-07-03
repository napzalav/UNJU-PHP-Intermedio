<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 5</title>
    <style>
        .center {text-align: center;}
        .right {text-align: right;}
        .left {text-align: left;}
    </style>
</head>
<body>
    <h1>“Programación Orientada a Objetos”</h1>

    <?php include 'menu.php'; ?>
    
    <h3>Consigna 3</h3>
    <p>Crear la clase CabeceraPagina que permita mostrar un título, indicarle si queremos que aparezca centrado, a derecha o izquierda, además permitir definir el color de fondo y de la fuente. Pasar los valores que cargaran los atributos mediante un constructor.</p>

    <form action="desarrollo3.php" method="post">
        <label for="titulo">Agregue un titulo: </label>
        <input type="text" name="titulo" required>
        <br><br>

        <label for="ubicacion">Ubicación: </label>
        <select name="ubicacion" id="ubicacion" required>
            <option value="centro">Centrado</option>
            <option value="izquierda">Izquierda</option>
            <option value="derecha">Derecha</option>
        </select>
        <br><br>

        <label for="colorFondo">Elegir color de fondo: </label>
        <input type="color" name="colorFondo" required>
        <br><br>

        <label for="fuente">Elegir color de la fuente: </label>
        <input type="color" name="fuente" required>
        <br><br>

        <input type="submit" name="submit" value="Mostrar Cabecera">
    </form>

</body>
</html>