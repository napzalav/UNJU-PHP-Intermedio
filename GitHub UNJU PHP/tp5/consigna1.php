<?php 
echo '<a href="http://localhost/unju/tp5/consigna1.html">Volver al HTML de la consigna 1</a><br><br>';
class Persona { //creamos la clase Persona
    public $nombre; //creamos la propiedad nombre y su nivel de proteccion publica
    public $apellido;  //creamos la propiedad apellido y su nivel de proteccion publica
    protected $edad; // creamos la propiedad edad y su nivel de proteccion protegido

    public function setName($nombre){ //creamos el método setName
        $this->nombre = strtolower($nombre); //Convierte un string a minúsculas. https://www.php.net/manual/es/function.strtolower
    }

    public function getName(){ //creamos el método getName para tratar el nombre
        //return ucfirst($this->nombre); //Convierte el primer caracter de una cadena a mayúsculas. Si ingreso dos nombre solo convierte la primer letra.
        return ucwords($this->nombre); //Convierte a mayúsculas el primer caracter de cada palabra de una cadena. Esto soluciona el hecho de que si el usuario ingresa un nombre compuesto como "Jose Maria" o "Maria Jose" la funcion convierte los dos nombre. https://www.php.net/manual/es/function.ucwords.php
        //$this->nombre = ucfirst($this->nombre);
    }

    public function setApellido($apellido){
        $this->apellido = strtolower($apellido);
    }

    public function getApellido(){
        return ucwords($this->apellido);
        //return $this->apellido;
    }
}


if (isset($_POST) && !empty($_POST)){ //comprobamos que los datos lleguen del formulario  y no se encuentre vacio

    $persona = new Persona(); //creamos una nueva persona

    //obtengo los datos del formulario y lo guardo en las variable $nombre, $apellido
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    //almacenamos en el objeto Persona los datos tratados con setName 
    $persona->setName($nombre);
    $persona->setApellido($apellido);

    //mostramos los datos procesados
    echo "Nombre: " . $persona->getName() . "<br>";
    echo "Apellido: " . $persona->getApellido() . "<br>";


}



/*
$persona = new Persona();

$persona->setName($_POST["nombre"]);
$persona->setName($_POST["apellido"]);

//echo $persona->nombre . $persona->apellido;

if (isset($_POST) && !empty($_POST)){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    //$edad = $_POST["edad"];
    echo $nombre . " " . $apellido;
}
*/


?>