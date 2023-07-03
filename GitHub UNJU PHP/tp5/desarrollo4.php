<?php include 'class Alumno.php';

echo '<a href="./consigna4.php">Inténtalo de nuevo</a><br><br>';

if (isset($_POST) && !empty($_POST)){ //obtenemos los datos del formulario y revisamos que no se encuentren vacios
    $nombreAlumno = $_POST["nombre"]; //asignamos los datos obtenidos a las variables 
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];

    //clase Alumno

    $alumno = new Alumno;   //creamos un objeto Alumno

    //asignamos los datos ingresados dentro del objeto Alumno
    $alumno->nombreAlumno = $nombreAlumno;
    $alumno->nota1 = $nota1;
    $alumno->nota2 = $nota2;
    $alumno->nota3 = $nota3;
    $alumno->nota4 = $nota4;

    $alumno->calcularNotaFinal(); //calculamos la nota final

    echo "<h2>Resultado: </h2>";
    echo "Nombre del alumno: " . $alumno->nombreAlumno . "<br>";
    echo "Nota final: " . $alumno->notaFinal . "<br>";

    //echo "Nota 1: " . $alumno->nota1 . "<br>";
    //echo "Nota 2: " . $alumno->nota2 . "<br>";
    //echo "Nota 3: " . $alumno->nota3 . "<br>";
    //echo "Nota 4: " . $alumno->nota4 . "<br>";
}

    echo "<pre>";
    var_dump($nota1);
    var_dump($nota1 * 0.15);

    var_dump($nota2);
    var_dump($nota2 * 0.2);

    var_dump($nota3);
    var_dump($nota3 * 0.25);

    var_dump($nota4);
    var_dump($nota4 * 0.4);
    //var_dump($notaFinal);
    var_dump($alumno->notaFinal);
?>