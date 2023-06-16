<?php
if (isset($_POST['convertir'])) {
    // obtengo la cadena enviada desde el formulario camturando el submit de nombre "convertir"
    $cadena = $_POST['cadena']; //almaceno el texto en la variable $cadena

    // verifico que la cadena no esté vacía
    if (empty($cadena)) {
        echo "La cadena no puede estar vacía.";
        exit; // se detiene la ejecución si la cadena está vacía
    }

    // Controlo la cantidad de caracteres
    if (strlen($cadena) > 80) {
        echo "La cadena no puede tener más de 80 caracteres.";
        exit; // la ejecución del if se detiene si superan los 80 caracteres
    }

    // para convertir la cadena a mayúsculas
    $cadena = strtoupper($cadena);

    //para eliminar espacios en blanco al principio y al final
    $cadena = trim($cadena);
}
?>

<?php
if (isset($_POST['convertir'])) :
    echo "<h3>Resultado:</h3>";
    if (!empty($cadena)) :
        echo "<p>Cadena convertida a mayúsculas: $cadena</p>";
    else :
        echo "<p>La cadena está vacía.</p>";
    endif;
endif;
?>