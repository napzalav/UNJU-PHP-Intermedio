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

    
    <?php 
    //Para esta funcion, utilizo el "operador de módulo (%)" ya que este obtiene el resto(o residuo) de la division de un numero entre otro. Si ponemos en una calculadora cientifica de windows el siguiente ejemplo: 77 mod 2 = 1 
    //vemos que el modulo de 77 dividido entre 2 deja un resto de 1, por lo tanto 77 NO es par, es IMPAR
    function paridad($numero){
        if($numero % 2 == 0) {
            return "El número $numero es PAR";
        } else {
            return "El número $numero es IMPAR";
        }
    }

    //despues de definir la funcion "paridad" se puede llamar y almacenar el resultado en la variable "$verificar"
    //pasamos un numero cualquiera por parametro:
    echo "<p><b>Ingresar un número de manera manual por parámetro de la función 'paridad' y actualizar la página</b></p>";

    $verificar = paridad(9);
    echo $verificar;

    ?>

    <ul>
        <li><a href="http://localhost/unju/tp3/consigna2alternativa.php">Esta es otra resolucion de la consigna 2, realizada con un formulario</a></li>
    </ul>


</body>

</html>