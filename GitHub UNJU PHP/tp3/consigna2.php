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
    <?php include 'funciones.php';

    //despues de definir la funcion "paridad" se puede llamar y almacenar el resultado en la variable "$verificar"
    //pasamos un numero cualquiera por parametro:
    echo "<p><b>Ingresar un número de manera manual por parámetro de la función 'paridad' y actualizar la página</b></p>";

    $verificar = paridad(13);
    echo $verificar;

    ?>

    <ul>
        <li><a href="./consigna2alternativa.php">Esta es otra resolucion de la consigna 2, realizada con un formulario</a></li>
    </ul>
</body>
</html>