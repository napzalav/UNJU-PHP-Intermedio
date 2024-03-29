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
    <h3>Consigna 5</h3>
    <p>Realizar una función que acepte el lado de un cuadrado y calcule su perímetro y su superficie (No imprimir dentro de la función).</p>
    <p>Click para visualizar las otras consignas:</p>
    <?php include 'menu.php'; ?>

    <form action="#" method="post">
        <p><b>Ingresar longitud de lado de cuadrado:</b></p>
        <input type="number" id="lado" name="lado" required>
        <input type="submit" name="calcular" value="Calcular">
    </form>
    <br>

    <?php include 'funciones.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") { //aqui se verifica si ingresamos un valor o no a traves del formulario. verifica si el método de envío del formulario es POST. Esto significa que se espera que el formulario haya sido enviado.
        $lado = $_POST["lado"]; //"lado" es el nombre del campo del formulario del cual queremos obtener el valor. cuando se ingresa la longitud del lado del cuadrado se almacena como un array dentro de la variable llamada $lado


    $datos = infoCuadrado($lado);   //los resultados son guardados en la variable $datos

    $perCuadrado = $datos[0];
    $supCuadrado = $datos[1];

    echo "El perímetro del cuadrado cuyo lado mide $lado es de: " . $perCuadrado . "mts.";
    echo "<br>";
    echo "La superficie del cuadrado cuyo lado mide $lado es de: " . $supCuadrado . "mts<sup>2</sup>."; //para escribir el potenciador "al cuadrado" uso la etiqueta de superindice <sup></sup>
    }
    ?>

</body>
</html>