<?php
if (isset($_POST['convertir'])) {
    // obtengo la cadena enviada desde el formulario camturando el submit de nombre "convertir"
    $cadena = $_POST['cadena']; //almaceno el texto en la variable $cadena

    // verifico que la cadena no esté vacía
    if (empty($cadena)) {
        echo "La cadena no puede estar vacía.";
        exit; // se detiene la ejecución si la cadena está vacía
    }

    //almaceno la cantidad de caracteres en la variable $cantidad
    $cantidad = strlen($cadena);

    // Controlo la cantidad de caracteres. SI la cadena tiene mas de 80 caracteres no puedo continuar y me da la opcion de volver al formulario
    if (strlen($cadena) > 80) {
        echo "La cadena no puede tener más de 80 caracteres.";
        echo '<a href="./consigna1.php">Volver a ingresar</a>';
        exit; // la ejecución del if se detiene si superan los 80 caracteres
        //si esta dentro la la cantidad permitida puedo continuar la ejecución
    }else {
        echo "La cadena tiene $cantidad caracteres.";
        //para eliminar espacios en blanco al principio y al final
        $cadena = trim($cadena);

        // para convertir la cadena a mayúsculas
        $cadena = strtoupper($cadena);
    }
}

if (isset($_POST['convertir'])) :
    echo "<h3>Conversion:</h3>";
    if (!empty($cadena)) :
        echo "<p>Cadena convertida a mayúsculas: $cadena</p>";
        echo '<a href="./consigna1.php">Quieres ingresar otra cadena?</a>';
    else :
        echo "<p>La cadena está vacía.</p>";
    endif;
endif;
?>