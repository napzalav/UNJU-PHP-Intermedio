<?php 

//$cars = array ("Volvo", "BMW", "Toyota");

//con la etiqueta <pre> acomoda la vista de la pantalla de manera ordenada
//echo '<pre>';
//var_dump($cars)


$edades = array (
    "Pedro" => "35",
    "Martin" => "37",
    "Carlos" => "43"
);

//echo $edades["Pedro"];

//Se visualizan los valores del array
//foreach ($edades as $edad){
//    echo $edad. '<br>';
//}


//Se visualizan las Claves del array
//foreach ($edades as $clave => $valor){
//    echo $clave. '<br>';
//}


//se agrega texto ademas de las claves y valores
foreach ($edades as $clave => $valor){
    echo $clave . ' tiene ' . $valor . ' años <br>';
}



?>