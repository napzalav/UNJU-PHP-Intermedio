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
    <h3>Consigna 3</h3>
    <p>Realizar una función que acepte un número, y retorne la suma de todos los números inferiores a él, incluido dicho número. Por ejemplo, si el número ingresado es 5, deberá devolver: 1+2+3+4+5</p>
    <p>Click para visualizar las otras consignas:</p>
    <ul>
        <li><a href="./consigna1.php">Consigna 1</a></li>
        <li><a href="./consigna2.php">Consigna 2</a></li>
        <li><a href="./consigna3.php">Consigna 3</a></li>
        <li><a href="./consigna4.php">Consigna 4</a></li>
        <li><a href="./consigna5.php">Consigna 5</a></li>
    </ul>

    <form action="#" method="post">
        <p>Ingresar numero:</p>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" name="verificar">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //aqui se verifica si ingresamos un número o no a traves del formulario. verifica si el método de envío del formulario es POST. Esto significa que se espera que el formulario haya sido enviado.
        $numero = $_POST["numero"]; //"numero" es el nombre del campo del formulario del cual queremos obtener el valor. cuando se ingresa el numero se almacena como un array dentro de lavariable llamada $numero
    }

    $vectorNum = range(0, $numero);
    echo "<h2>" . "En este vector se almacenan todos los números inferiores a " . $numero . ", incluyéndolo:" . "</h2>";

    $suma = 0;  //la variable $suma se inicializa antes del bucle foreach para almacenar la suma de los valores. 
    echo "[";
    foreach ($vectorNum as $k => $v) {
        echo " - " . $v;
        $suma += $v;
    }
    echo "]";

    //despues de finalizar el bucle mostramos el resultado final de la suma en la página usando 'echo'
    echo "<h2>" . "Y la suma de TODOS los valores en el vector es de: " . $suma . "</h2>";
    ?>

</body>
</html>