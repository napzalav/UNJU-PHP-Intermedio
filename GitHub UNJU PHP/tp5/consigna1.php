<?php 
echo '<a href="http://localhost/unju/tp5/consigna1.html">Inténtalo de nuevo</a><br><br>';
class Persona { //creamos la clase Persona
    private $nombre; //creamos la propiedad nombre y su nivel de proteccion publica
    private $apellido;  //creamos la propiedad apellido y su nivel de proteccion publica
    protected $edad; // creamos la propiedad edad y su nivel de proteccion protegido

    public function setName($nombre){ //creamos el método setName
        $this->nombre = strtolower($nombre); //Convierte un string a minúsculas. https://www.php.net/manual/es/function.strtolower
    }

    public function getName(){ //creamos el método getName para tratar el nombre
        //return ucfirst($this->nombre); //Convierte el primer caracter de una cadena a mayúsculas. Si ingreso dos nombre solo convierte la primer letra.
        return ucwords($this->nombre); //Convierte a mayúsculas el primer caracter de cada palabra de una cadena. Esto soluciona el hecho de que si el usuario ingresa un nombre compuesto como "Jose Maria" o "Maria Jose" la funcion convierte los dos nombre. https://www.php.net/manual/es/function.ucwords.php
        //$this->nombre = ucfirst($this->nombre);
    }

    public function setApellido($apellido){ //igual que en setName
        $this->apellido = strtolower($apellido);
    }

    public function getApellido(){ //igual que en getName
        return ucwords($this->apellido);
        //return $this->apellido;
    }

    public function setEdad($edad){ //creamos el metodo setEdad
        $this->edad = $edad; // asignamos el valor que pasamos como argumento ("$edad") a la propiedad edad del objeto actual
    }

    public function getEdad(){ //con el metodo getEdad accedemos al valor almacenado
        return $this->edad;
    }
}


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