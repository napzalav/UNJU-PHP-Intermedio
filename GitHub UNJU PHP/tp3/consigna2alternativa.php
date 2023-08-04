<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 3</title>
</head>
<body>
    <h1>“FUNCIONES EN PHP” </h1>
    <h3>Consigna 2</h3>
    <p>Realizar una función que permita determinar si un número pasado como parámetro, es par o impar.</p>
    <p>Click para visualizar las otras consignas:</p>

    <?php include 'menu.php'; ?>

    <form action="#" method="post">
        <p>Ingresar numero:</p>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" name="verificar">
    </form>
    <br>

    <?php include 'funciones.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") { //aqui se verifica si ingresamos un número o no a traves del formulario. verifica si el método de envío del formulario es POST. Esto significa que se espera que el formulario haya sido enviado.
        $numero = $_POST["numero"]; //"numero" es el nombre del campo del formulario del cual queremos obtener el valor. cuando se ingresa el numero se almacena como un array dentro de lavariable llamada $numero

        if (verificar($numero)) {
            echo "<p>El numero $numero es PAR.</p>";
        } else {
            echo "<p>El numero $numero es IMPAR.</p>";
        }
    }
    ?>

    <ul>
        <li><a href="./consigna2.php">Volver a la consigna 2</a></li>
    </ul>
</body>
</html>