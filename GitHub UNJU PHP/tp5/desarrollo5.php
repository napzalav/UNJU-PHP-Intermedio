<?php include 'class TelefonoCelular.php';

echo '<a href="./consigna5.php">Inténtalo de nuevo</a><br><br>';

//obtenemos los datos enviados por formulario
if (isset($_POST["submit"])) {
    $marca = $_POST["marca"];
    $color = $_POST["color"];
    $so = $_POST["so"];
    $numero = $_POST["numero"];
    $numerollamado = $_POST["numerollamado"];
    $estado = $_POST["estado"];
    $haciendollamada = $_POST["haciendollamada"];

    //6-Cree dos objetos tipo TelefonoCelular llamados celular1 y celular2. Imprima el estado de los dos objetos.
    //a $celular1 le asignamos los valores enviados desde el formulario
    //a $celular2 le asignamos valores manualmente
    $celular1 = new TelefonoCelular($marca, $color, $so, $numero, $numerollamado, $estado, $haciendollamada);
    $celular2 = new TelefonoCelular("Iphone", "Azul", "Iphone", "111222333", "666555666", "encendido", "SI");
    echo "<pre>";
    echo "LOS DATOS DEL celular1 SON CARGADOS DESDE EL FORMULARIO <br>";
    var_dump($celular1);
    echo "<br>LOS DATOS DEL celular2 SON CARGADOS MANUALMENTE (HARDCODEADOS) <br>";
        var_dump($celular2);
    echo "</pre>";

    //imprimimos el estado de los celulares
    echo "<b>Estado del celular1: </b>" . $celular1->getEstado() . "<br>";
    echo "<b>Estado del celular2: </b>" . $celular2->getEstado() . "<br>";

    //8-Simule el siguiente comportamiento con el celular 1: ***Apague el celular***Haga una llamada***Termine la llamada***Encienda el celular***Termine la llamada***Imprima el estado del celular1***
    echo "<b>Esta es una simulación de comportamiento con el celular1 (datos ingresados mediante formulario): </b><br>";
    echo "*Apague el celular*";
    echo $celular1->apagarCelular();
    echo "*Haga una llamada*";
    echo $celular1->hacerLlamada($numerollamado);
    echo "*Termine la llamada*";
    echo $celular1->terminarLlamada($numerollamado);
    echo "*Encienda el celular*";
    echo $celular1->encenderCelular();
    echo "*Termine la llamada*";
    echo $celular1->terminarLlamada($numerollamado);
    echo "*Imprima el estado del celular1*";
    echo "<br>Estado del celular1: " . $celular1->getEstado() . "<br>";

    //9-Simule el siguiente comportamiento con el celular2: ***Haga una llamada***Imprima el estado del celular2
    echo "<b>Esta es una simulación de comportamiento con el celular2 (datos hardcodeados): </b><br>";
    echo "*Haga una llamada*";
    echo $celular2->hacerLlamada($numerollamado);
    echo "*Imprima el estado del celular2*";
    echo "<br>Estado del celular2: " . $celular2->getEstado() . "<br>";
}
?>