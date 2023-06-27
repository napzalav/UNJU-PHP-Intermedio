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
    <ul>
        <li><a href="http://localhost/unju/tp3/consigna1.php">Consigna 1</a></li>
        <li><a href="http://localhost/unju/tp3/consigna2.php">Consigna 2</a></li>
        <li><a href="http://localhost/unju/tp3/consigna3.php">Consigna 3</a></li>
        <li><a href="http://localhost/unju/tp3/consigna4.php">Consigna 4</a></li>
        <li><a href="http://localhost/unju/tp3/consigna5.php">Consigna 5</a></li>
    </ul>

    <form action="#" method="post">
        <p>Ingresar numero:</p>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" name="verificar">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //aqui se verifica si ingresamos un número o no a traves del formulario. verifica si el método de envío del formulario es POST. Esto significa que se espera que el formulario haya sido enviado.
        $numero = $_POST["numero"]; //"numero" es el nombre del campo del formulario del cual queremos obtener el valor. cuando se ingresa el numero se almacena como un array dentro de lavariable llamada $numero

        function verificar($numero){ //la función "verificar" toma el numero almacenado en la variable $numero que ingresamos por el formulario y determina si es par o impar
            return $numero % 2 == 0; //esta porcion nos arroja TRUE o FALSE. nos dice si el "resto" de la division es igual a 0, por ejemplo, ingresamos como valor un 4, (si comprobamos en la calculadora de windows ponemos 4 mod 2= y nos entrega 0 de resultado)
            //0 == 0 es TRUE entonces cumple la condicion y arroja como resultado "PAR"
        }

        if (verificar($numero)) {
            echo "<p>El numero $numero es PAR.</p>";
        } else {
            echo "<p>El numero $numero es IMPAR.</p>";
        }
    }
    ?>

    <ul>
        <li><a href="http://localhost/unju/tp3/consigna2.php">Volver a la consigna 2</a></li>
    </ul>


</body>

</html>