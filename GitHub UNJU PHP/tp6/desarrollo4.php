<?php
include 'funciones.php';
require_once 'CPersona.php';
//namespace MyNamespace;

//require_once 'CEmpleado.php';
//require_once 'CEmpleadoInformatico.php';
//require_once 'CEmpleadoRRHH.php';
//require_once 'CEmpleadoContable.php';

echo '<a href="./consigna4.php">Calcular otro sueldo</a><br><br>';

//echo "helloword";

if (isset($_POST) && !empty($_POST)) {
    $nombre = convertirCadena($_POST["nombre"]);
    $nacimiento = $_POST["nacimiento"];
    $direccion = convertirCadena($_POST["direccion"]);
    $sexo = $_POST["sexo"];
    $disponibilidad = $_POST["disponibilidad"];
    $puesto = $_POST["puesto"];
    $ingreso = $_POST["ingreso"];
    $cantidad = $_POST["cantidad"];

    echo "<pre>";
    var_dump($nombre);
    var_dump($nacimiento);
    var_dump($direccion);
    var_dump($sexo);
    var_dump($disponibilidad);
    var_dump($puesto);
    var_dump($ingreso);
    var_dump($cantidad);
    echo "<br>";

    echo "</pre>";


    // Creamos el objeto de acuerdo al tipo de empleado seleccionado
    if ($puesto == 'Informática') {
        $empleado = new Informatico($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $ingreso, 200000);
    } elseif ($puesto == 'RRHH') {
        $empleado = new RRHH($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $ingreso, 300000);
        //$empleado = new RRHH(300000);
    } elseif ($puesto == 'Contable') {
        $empleado = new Contable($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $ingreso, 100000);
        //$empleado = new Contable(100000);
    }

    // Llamamos al método calcularSueldo($cantidad) del objeto de empleado para obtener el sueldo calculado y almacenarlo en la variable $sueldo
    $sueldo = $empleado->calcularSueldo($cantidad);

    echo "Área $puesto: El sueldo del empleado $nombre es: $" . $sueldo;
}

?>
