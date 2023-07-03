<?php include 'class Persona.php';

echo '<a href="./consigna1.php">Inténtalo de nuevo</a><br><br>';

if (isset($_POST) && !empty($_POST)){ //comprobamos que los datos lleguen del formulario  y no se encuentre vacio
    if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["edad"])){
        echo "Por favor completa todos los campos";
    } else {
        $persona = new Persona(); //creamos una nueva persona

        //obtengo los datos del formulario y lo guardo en las variables $nombre, $apellido y $edad
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];

        //almacenamos en el objeto Persona los datos tratados con setName 
        $persona->setName($nombre);
        $persona->setApellido($apellido);
        $persona->setEdad($edad);

        //mostramos los datos procesados
        echo "Nombre /s: " . $persona->getName() . "<br>";
        echo "Apellido /s: " . $persona->getApellido() . "<br>";
        echo "Edad: " . $persona->getEdad() . "<br>";
    }
}
?>