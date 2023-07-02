<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 4</title>
</head>
<body>
    <h1>“FUNCIONES INTERNAS PHP”</h1>
    <p>Click para visualizar las otras consignas:</p>
    
    <?php include 'menu.php'; ?>

    <h3>Consigna 3</h3>
    <p>Realizar la porción de código PHP que controle:</p>
    <ol>
        <li><b>Entrada:</b> juanperezcom.ar 
            <br>
            <b>Mensaje de Salida:</b> “e-mail incorrecto, no se encuentra el símbolo @”</li>
            <br>
        <li><b>Entrada:</b> @gmail.com.ar
            <br>
            <b>Mensaje de Salida:</b> “e-mail incompleto, por favor corrija su email”</li>
    </ol>

    <form action="desarrollo3.php" method="post">
        <label for="email">Correo electrónico:</label>
        <input type="text" name="email" id="email" required>
        <input type="submit" name="controlar">
    </form>
    <br>

</body>
</html>