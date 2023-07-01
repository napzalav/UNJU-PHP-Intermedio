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
    <h3>Consigna 4</h3>
    <p>Desarrollar una función que acepte una cadena de caracteres y la convierta en mayúscula</p>
    <p>Click para visualizar las otras consignas:</p>
    
    <?php include 'menu.php'; ?>

    <form action="#" method="post">
        <p><b>Ingresar una cadena de caracteres:</b></p>
        <input type="text" id="cadena" name="cadena" required>
        <input type="submit" name="convertir" value="Convertir">
    </form>

    <?php include 'funciones.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") { //aqui se verifica si ingresamos un texto o no a traves del formulario. verifica si el método de envío del formulario es POST. Esto significa que se espera que el formulario haya sido enviado.
        $cadena = $_POST["cadena"]; //"cadena" es el nombre del campo del formulario del cual queremos obtener el valor. cuando se ingresa la cadena de texto se almacena como un array dentro de lavariable llamada $cadena
    
    $cadenaConvertida = mayus($cadena);
    echo "Escribiste la siguiente cadena:";
    echo "<br>";
    echo $cadena;
    echo "<br>";
    echo "<br>";
    echo "Aquí esta la cadena convertida:";
    echo "<br>";
    echo $cadenaConvertida;
    }

    ?>
</body>
</html>