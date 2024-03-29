<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 4</title>
</head>
<body>
    <h1>“FUNCIONES INTERNAS PHP” </h1>
    <p>Click para visualizar las otras consignas:</p>

    <?php include 'menu.php'; ?>

    <h3>Consigna 2</h3>
    <p>Indique la salida de la siguiente porción de código y explique paso a paso que es lo que se está haciendo:</p>
    <code>

        <br>
        $array1 = array("#","$","%","&","[","]","{","}","*","/","=");
        <br>
        $array2 = "";
        <br>
        $calculo = "$var=numero1/(numero2*numero3)";
        <br>
        $res = str_replace($array1,$array2,$calculo);
        <br>
        $res = substr($res,1,2);
        <br>

    </code>

    <h3>Conclusión:</h3>
    <p>En la primera y segunda línea se determinan los valores de los array1 y array2 respectivamente:</p>
    <code>$array1 = array("#","$","%","&","[","]","{","}","*","/","=");</code>
    <br>
    <code>$array2 = "";</code>

    <p>Cuando se usan las dobles comillas en la tercera linea, se presenta un error "Cannot implicitly convert 'void' to 'string" ya que no se declara un valor en la variable $var. Para solucionarlo se cambia las comillas dobles por las simples:</p>
    <p>Originalmente tenemos:
        <code>$calculo = "$var=numero1/(numero2*numero3)";</code>
    </p>
    <p>Reemplazamos por comillas simples:
        <code>$calculo = '$var=numero1/(numero2*numero3)';</code>
    </p>
    <br>

    <p><b>DEFINICION de str_replace()</b></p>
    <p>Reemplaza todas las apariciones de una subcadena por otra en una cadena principal. Es utilizada para realizar modificaciones en una cadena, como cambiar una palabra específica por otra o reemplazar caracteres no deseados.
    </p>
    <p>En la cuarta linea:
        <code>$res = str_replace($array1,$array2,$calculo);</code>
    </p>
    <p>La funcion str_replace() recibe tres parametros:</p>
    <p>$array1: <b>Busca</b> todos los elementos almacenados en el array1</p>
    <p>$array2: <b>Reemplaza</b> los elementos encontrados por el valor almacenado en el $array2</p>
    <p>$calculo: Es la <b>variable</b> donde ocurre el proceso</p>
    <p>El resultado de estos cambios son almacenados dentro de la variable <b>$res</b> quedando de la siguiente manera:
        <code>$res = 'varnumero1(numero2numero3)';</code></p>
    <p>Como se observa, todos los elementos que estaban dentro del array1 fueron reempazados en su totalidad por vacíos almacenados en el array2</p>
    <br>

    <p><b>DEFINICION de substr()</b></p>
    <p>Extrae una parte específica de una cadena de texto. Es útil para obtener subcadenas a partir de una cadena más grande, por ejemplo, para extraer una porción de un nombre de archivo o para obtener los primeros caracteres de un texto.</p>
    <p>En la quinta linea:
        <code>$res = substr($res,1,2);</code>
    </p>
    <p>La funcion substr() esta compuesta de tres paramentros:</p>
    <p><b>$res:</b> Es la cadena de la cual se tomará la subcadena</p>
    <p><b>1:</b> Es el índice donde comenzará la subcadena</p>
    <p><b>2:</b> Es la longitud que tendrá la subcadena</p>
    <p>Vemos que dentro de la cadena <code>'varnumero1(numero2numero3)'</code> el índice 1 corresponde ala letra 'a' y tiene una longitud de 2 por lo que el resultado sería 'ar' y este valor es almacenado nuevamente dentro de la variable <b>$res</b></p>
    <p>Si llamamos a la variable $res el resultado final es:</p>
    <code>$res = 'ar';</code><br><br>

    <a href="desarrollo2.php">Ver consigna 2 en PHP</a>

</body>
</html>