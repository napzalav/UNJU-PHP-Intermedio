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

    <?php include 'menu.php'; ?>

    <form action="" method="post">
        <p>Ingrese los números a multiplicar:</p>
        <input type="number" name="valor1" required>X
        <input type="number" name="valor2" required>
        <input type="submit" name="multiplicar">
    </form>
    <br>

    <?php include 'funciones.php';

    if (isset($_POST) && !empty($_POST)) {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $producto = producto($valor1, $valor2);
        echo "El resultado de la multiplicación de $valor1 y $valor2 es: " . $producto;
    }
?>
</body>
</html>