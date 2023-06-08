<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Trabajo Práctico 2</title>
</head>

<body>
    <h1>“ESTRUCTURA DE DATOS - OPERACIONES CON VECTORES” </h1>
    <h3>Consigna 2</h3>
    <p>Crear una estructura HTML, que contenga 4 imágenes (almacenadas en el vector) que al volver a cargar el archivo (o actualizarlo) cambien la ubicación en forma aleatoria</p>
    <h2>Imágenes llamadas mediante URL</h2>


    <?php

    $heroes = array(
        "templar" => '<img width="290" height="160" src="https://images4.alphacoders.com/742/742351.jpg" alt="">',

        "omni" => '<img width="290" height="160" src="https://www.wallpapers13.com/wp-content/uploads/2017/07/Omniknight-Dota-2-Games-Fantasy-Art-HD-Wallpapers-1920x1080-840x525.jpg" alt="">',

        "puck" => '<img width="290" height="160" src="https://w0.peakpx.com/wallpaper/671/387/HD-wallpaper-puck-characters-faerie-dragon-dota-2.jpg" alt="">',

        "wind" => '<img width="290" height="160" src="https://i.pinimg.com/originals/e4/50/17/e4501751f78f2eaf434635e099e1191c.jpg" alt="">'

    );

    arsort($heroes);
    shuffle($heroes);

    //Función arsort(): Es la inversa de la función asort(). Permite ordenar un vector con índices de texto pasado como parámetro en forma descendente, es decir de mayor a menor.
    //Función shuffle(): Permite mezclar los elementos de un arreglo, es decir, que cambie en forma aleatoria el orden de los elementos del arreglo que se le pase como parámetro.

    echo "<h2>" . "Vector ordenado de forma aleatoria usando arsort y shuffle" . "</h2>";

    foreach ($heroes as $k => $v) {
        echo $v;
    }

    //Otra forma de acceder al vector ordenadode forma aleatoria seria de la siguiente forma:

    foreach ($heroes as $heroe){
        echo $heroe;
    }

    ?>


    <br>
    <br>
    <h2>Imágenes llamadas mediante la carpeta local de IMG</h2>

    <?php

    $heroesIMG = array(
        "elder" => '<img width="290" height="160" src="../tp2/img/elder.jpg" alt="">',
        "invoker" => '<img width="290" height="160" src="../tp2/img/invoker.jpg" alt="">',
        "kotl" => '<img width="290" height="160" src="../tp2/img/kotl.jpg" alt="">',
        "rubick" => '<img width="290" height="160" src="../tp2/img/rubick.jpg" alt="">'

    );

    echo "<h2>" . "Vector ordenado en una tabla de forma aleatoria usando solo shuffle" . "</h2>";

    shuffle($heroesIMG);

    ?>

    <table>
        <tbody>
            <tr>
                <?php
                foreach ($heroesIMG as $clave => $valor) {
                    echo "<th>" . $valor . "<th>";
                }
                ?>
            </tr>
        </tbody>
    </table>

</body>

</html>