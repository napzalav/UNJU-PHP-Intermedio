<?php include 'class CabeceraPagina.php';

echo '<a href="./consigna3.php">Inténtalo de nuevo</a><br><br>';

//para obtener los valores del formulario y que se haya hecho click en el boton con el nombre "submit"
if (isset($_POST["submit"])) {
    $titulo = $_POST["titulo"];
    $ubicacion = $_POST["ubicacion"];
    $colorFondo = $_POST["colorFondo"];
    $fuente = $_POST["fuente"];

    //reviso los valores almacenados en las variables
    //echo "<pre>";
    //var_dump($titulo);
    //var_dump($ubicacion);
    //var_dump($colorFondo);
    //var_dump($fuente);

    $cabecera = new CabeceraPagina($titulo, $ubicacion, $colorFondo, $fuente); //se crea una instancia de la clase CabeceraPagina y se usan los valores ingresados por el usuario mediante el formulario para inicializar los atributos titulo, ubicacion, colorFondo y fuente

    $cabecera->mostrarCabecera(); //se llama al metodo "mostrarCabecera()" para mostrar la cabecera en la página con los valores proporcionados
}

?>