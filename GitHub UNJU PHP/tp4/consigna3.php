<?php 
echo '<a href="http://localhost/unju/tp4/consigna3.html">Regresar al HTML de la consigna 3</a><br><br>';

if (isset($_POST) && !empty($_POST)) { //verificamos que se haya enviado un email a traves del formulario y que este campo no se encuentre vacío
    $email = $_POST["email"]; //"email" es el nombre del campo del formulario del cual queremos obtener el valor. cuando se ingresa el email se almacena como un array dentro de lavariable llamada $email

    //para eliminar posibles espacios en blanco al principio y al final de la cadena
    $email = trim($email);

    if (strpos($email, "@") === false) { //usando la funcion strpos() buscamos el simbolo "@" dentro de la cadena "$email". Si esta condición arroja "false" significa q el simbolo "@" no está presente en la cadena "$email" y arroja el siguiente mensaje:
        echo "email incorrecto, no se encuentra el símbolo @";
    } elseif (strpos($email, "@") === 0) { //esta condicion verifica si el simbolo "@" se encuentra en la posicion [0] o sea al principio de la cadena "$email". Si devuelve 0, significa que el simbolo "@" se encuentra al principio por lo que entendemos que el email esta incompleto y falta el nombre, arrojando el sguiente mensaje:
        echo "email incompleto, por favor corrija su email";
    } else { //si el email TIENE el simbolo "@" y este NO SE ENCUENTRA al principio de la cadena entonces significa q es un email válido
        echo "El email es válido";
    }
}

?>