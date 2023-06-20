<?php 
echo '<a href="http://localhost/unju/tp4/consigna4.html">Volver a cargar el DNI</a><br><br>';

if (isset($_POST)){ //verificamos que se haya enviado un dni a traves del formulario
    if (empty($_POST["dni"])){ //alternativamente tambien puedo verificar que no se encuentre vacío poniendo en el input del formulario un "required" (*HTML linea 30)
        echo "El campo es obligatorio";
    } else {
        //elimino los puntos del dni tomando la entrada del formulario y almacenandolo dentro de la variable $dni
        $dni = str_replace(".", "", $_POST["dni"]);

        if (!is_numeric($dni)) { //la funcion is_numeric sirve para determinar si la cadena ingresada es numerica o no y devuelve un valor booleano, entonces si la cadena NO es numerica arroja el mensaje. (esta funcion puede reemplazarse cambiando el type=text por type=numer en el imput, *HTML linea 30)
            echo "Debe ingresar solo números en el campo DNI";
        } elseif (strlen($dni) === 7){ //verifico 7 digitos para tramite de jubilacion
            echo "Trámite de jubilacion";
        } elseif (strlen($dni) === 8){ //verifico q sea un dni válido de 8 digitos
            echo "DNI válido <br>";
            echo $dni;
        } else { //cualquier otro caso que no cumpla con las condiciones de jubilacion y valido va a ser rechazado
            echo "DNI inválido <br>";
            echo "No cumple la cantidad de caracteres válida";
        }     
    }
}

?>