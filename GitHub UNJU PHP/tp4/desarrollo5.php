<?php
echo '<a href="./consigna5.php">Volver a la consigna 5</a><br><br>';

//almaceno los nombres de las ciudades dentro del array $ciudades
$ciudades = ["Salta", "Mendoza", "Santa Fe", "Mar del Plata", "Córdoba"];

//utilizando la funcion implode() puedo unir todas las ciudades en el mismo orden que fueron almacenadas dentro del array y separarlas con # o el caracter que desee
//esta funcion recibe dos parametros
//implode("ElSeparador", "yElArray")
var_dump(implode("#" , $ciudades));

?>