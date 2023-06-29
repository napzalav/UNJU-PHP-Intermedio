<?php 
echo '<a href="./consigna2.html">Inténtalo de nuevo</a><br><br>';

class Empleado { //creamos la clase Empleado
    public $nombre; //creamos la propiedad nombre para el empleado
    public $sueldo; //creamos la propiedad sueldo

    function inicializar($nombre, $sueldo){ //creamos el metodo inicializar que recibe los atributos $nombre y $sueldo
        $this->nombre = ucwords(strtolower($nombre)); //almaceno el nombre, primero convirtiendo todas las letras en minusculas y luego poniendo en mayusculas la primera letra de cada palabra.
        $this->sueldo = $sueldo; //almacenamos el sueldo envieado desde formulario
    }

    function imprimirMje(){
        echo "Empleado/a: " . $this->nombre . "<br>";
        echo "Tu sueldo es de: $" . $this->sueldo . "<br>";
        if($this->sueldo >45000) {
            echo "Debes pagar impuestos ya que tu sueldo supera los $45.000";
        } else {
            echo "NO debes pagar impuestos";
        }
    }
}

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