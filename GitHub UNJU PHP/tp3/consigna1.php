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
    <h3>Consigna 1</h3>
    <p>Realizar una función que acepte dos números y devuelva el producto de ambos. Cargar los dos valores a través de un formulario.</p>
    <p>Click para visualizar las otras consignas:</p>
    <ul>
        <li><a href="http://localhost/unju/tp3/consigna1.php">Consigna 1</a></li>
        <li><a href="http://localhost/unju/tp3/consigna2.php">Consigna 2</a></li>
        <li><a href="http://localhost/unju/tp3/consigna3.php">Consigna 3</a></li>
        <li><a href="http://localhost/unju/tp3/consigna4.php">Consigna 4</a></li>
        <li><a href="http://localhost/unju/tp3/consigna5.php">Consigna 5</a></li>
    </ul>


    <form action="#" method="post">
        <input type="number" name="valor1">
        <input type="number" name="valor2">
        <input type="submit" name="multiplicar">
    </form>


    <?php
    function producto($num1, $num2)
    {
        $producto = $num1 * $num2;
        return $producto;
    }


    echo '<pre>';
    var_dump($_POST);


    if (isset($_POST) && !empty($_POST)) {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "El resultado de la multiplicación de $valor1 y $valor2 es: " . $valor1 * $valor2;
    }
    ?>

</body>

</html>