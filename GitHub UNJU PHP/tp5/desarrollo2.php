<?php include 'class Empleado.php';

echo '<a href="./consigna2.php">Inténtalo de nuevo</a><br><br>';

if (isset($_POST) && !empty($_POST)){
    $empleado = new Empleado();

    //obtengo los datos del formulario y lo guardo en las variables $nombre y $sueldo
    $nombre = $_POST["nombre"];
    $sueldo = $_POST["sueldo"];

    //almacenamos en el objeto Empleado los datos tratados en el metodo "inicializar"
    $empleado->inicializar($nombre, $sueldo);

    //mostramos los datos procesados con el metodo imprimirMje()
    $empleado->imprimirMje();
}
?>