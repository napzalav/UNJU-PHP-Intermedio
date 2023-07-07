<?php 
//use MyNamespace\Empleado;
//use MyNamespace\Postulante;
include 'funciones.php';
include 'CPersona.php';
include 'CPostulante.php';
include 'CEmpleado.php';

echo '<a href="./consigna2.php">Completar formulario</a><br><br>';

if (isset($_POST) && !empty($_POST)){ //verifico que los campos esten completos y no se encuentren vacios
    $nombre = convertirCadena($_POST["nombre"]);
    $nacimiento = $_POST["nacimiento"];
    $direccion = convertirCadena($_POST["direccion"]);
    $sexo = $_POST["sexo"];
    $disponibilidad = $_POST["disponibilidad"];
    $puesto = $_POST["puesto"];
    $ingreso = $_POST["ingreso"];
    $cv = $_FILES["cv"]["name"];
    $basico = "";
    //var_dump($ingreso);
    //echo "<br>";

    // Crear una instancia de la clase Postulante
    $postulante = new Postulante($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $cv);

    // Llamo a la función calcularEdad() y mostrar el resultado en pantalla
    $edad = $postulante->calcularEdad();

    // Crear una instancia de la clase Empleado
    $empleado = new Empleado($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $ingreso, $basico);

    // Llamo a la función calcularAntiguedad() y mostrar el resultado en pantalla
    $antiguedad = $empleado->calcularAntiguedad();

    echo "La edad de $nombre es de: " . $edad;
    echo "<br><br>";
    echo "La antiguedad de $nombre es de: " . $antiguedad;

    echo "<pre>";
    var_dump($postulante);
    echo "<br>";
    var_dump($edad);
    echo "<br>";

    var_dump($empleado);
    echo "<br>";
    var_dump($antiguedad);
    echo "<br>";

}