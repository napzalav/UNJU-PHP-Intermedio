<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabajo Práctico 2</title>
</head>

<body>


  <?php

  //echo "Hola mundo desde PHP";
  //echo "<p><i>«No necesito saberlo todo, tan sólo necesito saber donde encontrar aquello que me hace falta, cuando lo necesite». Albert Einstein, físico teórico y filósofo de la ciencia. (1879- 1955)</i></p>";

  echo "<h1>“ESTRUCTURA DE DATOS - OPERACIONES CON VECTORES” </h1>";
  echo "<h3>Consigna 1</h3>";
  echo "<p>Crear un vector asociativo que almacena las claves de acceso de 5 tipos de usuarios en el sistema: Administrador, Editor, Autor, Colaborador y Suscriptor.</p>";


  $tipoUsuario =  array(
    "Administrador" => "admin",
    "Editor" => "edit123",
    "Autor" => "a1122",
    "Colaborador" => "colab001",
    "Suscriptor" => "señorX"
  );

  echo "<br>";
  echo "<br>";
  echo "<br>";


  //Se visualizan las claves del array
  echo "<p><b>Utilizando un foreach se puede visualizar la lista de los 5 tipos de usuario:</b></p>";
  foreach ($tipoUsuario as $clave => $valor) {
    echo $clave . '<br>';
  }

  echo "<br>";

  //Se visualizan los valores del array
  echo "<p><b>De la misma forma se pueden visualizar las claves de acceso de cada usuario valores almacenados en el array:</b></p>";
  foreach ($tipoUsuario as $valor) {
    echo $valor . '<br>';
  }

  echo "<br>";

  //Se visualizan las Claves del array concatenado al valor almacenado en el array
  echo "<p><b>Ahora concatenamos las claves y los valores correspondientes:</b></p>";
  foreach ($tipoUsuario as $clave => $valor) {
    echo "La clave de acceso del " . $clave . " es " . " -> " . "$valor" . '<br>';
  }


  ?>


</body>

</html>