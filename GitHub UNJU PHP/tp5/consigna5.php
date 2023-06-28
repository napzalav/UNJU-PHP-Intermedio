<?php
echo '<a href="http://localhost/unju/tp5/consigna5.html">Inténtalo de nuevo</a><br><br>';

class TelefonoCelular { //creamos la clase TelefonoCelular y todas sus propiedades
    public $marca;
    public $color;
    public $so;
    public $numero;
    public $numerollamado;
    public $estado;
    public $haciendollamada;

    //creamos los metodos
    //El método hacerllamada debe recibir el número al cual se va a llamar y asignarlo a la propiedad numeroLlamado y debe modificar la propiedad haciendoLlamada a Sí
    public function hacerLlamada(){
        $this->numerollamado = $_POST["numerollamado"];
        $this->haciendollamada = "SI";

    var_dump($this->numerollamado);

    }

    public function terminarLlamada(){}

    public function apagarCelular(){}

    public function encenderCelular(){}

    //1-Crear un constructor con parámetros para inicializar los valores de los atributos del objeto a crear. El estado inicial es encendido y haciendollamada en No
    public function __construct($marca, $color, $so, $numero){
        $this->marca = $marca;
        $this->color = $color;
        $this->so = $so;
        $this->numero = $numero;
        $this->numerollamado = "";
        $this->estado = "encendido";
        $this->haciendollamada = "NO";
    }
}

//obtenemos los datos enviados por formulario 
if (isset($_POST["submit"])) {
    $marca = $_POST["marca"];
    $color = $_POST["color"];
    $so = $_POST["so"];
    $numero = $_POST["numero"];
    $numerollamado = $_POST["numerollamado"];
    $estado = $_POST["estado"];
    $haciendollamada = $_POST["haciendollamada"];


}


?>