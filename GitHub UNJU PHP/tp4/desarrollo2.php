<?php
echo '<a href="./consigna2.php">Regresar a la consigna 2</a>';

$array1 = array("#","$","%","&","[","]","{","}","*","/","=");
$array2 = "";
$calculo = '$var=numero1/(numero2*numero3)';
$res = str_replace($array1,$array2,$calculo);
$res = substr($res,1,2);

echo "<br><br>";
echo '<code>
    <?php
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
    ?>
</code>';
echo "<h3>Conclusión:</h3>";
echo '<pre>';

echo "En la linea 1 se determina el valor del array1 <br>";
var_dump($array1);

echo "<br>En la línea 2 se determina el valor del array2 <br>";
var_dump($array2);

echo '<br>En la línea 3 se determina el valor de la variable $calculo <br>';
var_dump($calculo);

echo '<br><br>En la línea 4 se aplica la funcion str_replace() la cual reemplaza todos los caracteres del array1 por la cadena vacía del array2 que se encuentran dentro de la variable $calculo <br>';
echo 'El resultado se almacena dentro  la variable $res <br>';
var_dump(str_replace($array1,$array2,$calculo));

echo '<br>En la línea 5 utilizamos la funcion substr() para obtener una subcadena de la variable $res<br>';
echo '<br>Esta subcadena empieza en el índice 1 que corresponde a la letra "a" y tiene una longitud de 2 caracteres y el resultado se almacena nuevamente dentro de la variable $res<br>';
var_dump($res);

//COMENTARIOS
//cuando se usan las dobles comillas en la tercera linea, se presenta un error "Cannot implicitly convert 'void' to 'string" ya que no se declara un valor en la variable $var. Para solucionarlo se cambia las comillas dobles por las simples  
//Original//    $calculo = "$var=numero1/(numero2*numero3)";
//Cambio//      $calculo = '$var=numero1/(numero2*numero3)';

//DEFINICION
//str_replace()
//Reemplaza todas las apariciones de una subcadena por otra en una cadena principal. Es utilizada para realizar modificaciones en una cadena, como cambiar una palabra específica por otra o reemplazar caracteres no deseados.

//En la cuarta linea:
//$res = str_replace($array1,$array2,$calculo); 

//lo que hace la funcion str_replace() es:
//Buscar todos los elementos dentro del -->                             $array1
//reemplazar los elementos encontrados por el valor almacenado en -->   $array2
//este proceso ocurre dentro de -->                                     $calculo
//el resultado lo almacena en la variable -->                           $res

//el RESULTADO la variable $res quedó de la siguiente manera:
// $res = 'varnumero1(numero2numero3)';
//como vemos todos los elementos que estaban dentro del array1 fueron reemplazados en su totalidad por "nada" almacenado en el array2

//DEFINICION
//substr()
//Extrae una parte específica de una cadena de texto. Es útil para obtener subcadenas a partir de una cadena más grande, por ejemplo, para extraer una porción de un nombre de archivo o para obtener los primeros caracteres de un texto.

//en la quinta linea:
//$res = substr($res,1,2);

//la funcion substr() esta compuesta de tres parametros:
//$res -->  es la cadena de la cual se tomará la subcadena
//1 -->     es el índice donde comenzará la subcadena 
//2 -->     es la longitud que tendrá la subcadena

//entonces obtenemos como RESULTADO de la subcadena que:
//dentro de la cadena 'varnumero1(numero2numero3)' el índice 1 corresponde a la letra 'a' y tiene una longitud de 2 por lo que el resultado sería 'ar' y este valor es almacenado nuevamente dentro de la variable $res

//Si llamamos a la variable $res el resultado final es:
//$res = 'ar';
?>