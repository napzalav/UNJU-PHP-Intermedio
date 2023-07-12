<?php include 'funciones.php';

echo '<a href="./consigna1.php">Completar formulario</a><br><br>';

if (isset($_POST) && !empty($_POST)){ //verifico que los campos esten completos y no se encuentren vacios

    //obtengo los datos del formulario y lo guardo en las variables correspondientes. Los datos ingresados por el usuario pasaran por una conversion con  la funcion convertirCadena() para estilizar la salida del texto
    $nombre = convertirCadena($_POST["nombre"]);
    $nacimiento = $_POST["nacimiento"];
    $direccion = convertirCadena($_POST["direccion"]);
    $sexo = $_POST["sexo"];
    $disponibilidad = $_POST["disponibilidad"];
    $puesto = $_POST["puesto"];
    $cv = $_FILES["cv"]["name"];

    echo "helloword";
    echo "<pre>";
    var_dump($nombre);
    var_dump($sexo);
    var_dump($puesto);
    echo "</pre>";


    crearDirectorioUploads(); //esta funcion fue creada a partir de la formulacion de **1** en funciones.php y sirve para crear un directorio si es que no existe y mover el archivo seleccionado a la carpeta detino "uploads"

// Mostrar el mensaje de confirmación (valido el sexo para arrojar un mensaje predeterminado)
    if ($sexo === "femenino") {
        echo '<span style="color: green;">La postulante ' . $nombre . ' se inscribió en el puesto ' . $puesto . '.</span>';
    } else {
        echo '<span style="color: green;">El postulante ' . $nombre . ' se inscribió en el puesto ' . $puesto . '.</span>';
    }

echo "<pre>";
echo "Estos son los datos cargados<br>";
echo $nombre . "<br>" . $nacimiento . "<br>" . $direccion . "<br>" . $sexo . "<br>" . $disponibilidad . "<br>" . $puesto . "<br><br>";
echo "Estos son los datos de la imagen cargada<br>";
var_dump($_FILES);

// Mostrar la imagen cargada
echo "Este es el archivo seleccionado <br>";
echo '<img src="uploads/' . $cv . '" alt="CV" style="width: 400px; height: auto;"><br>';

//echo '<a href="desarrollo1.php">Destruir imagen</a>';

}
?>