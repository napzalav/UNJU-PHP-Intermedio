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

    //1-Crear un constructor con parámetros para inicializar los valores de los atributos del objeto a crear. El estado inicial es encendido y haciendollamada en No
    public function __construct($marca, $color, $so, $numero, $numerollamado, $estado, $haciendollamada){
        $this->marca = $marca;
        $this->color = $color;
        $this->so = $so;
        $this->numero = $numero;
        $this->numerollamado = $numerollamado;
        $this->estado = $estado;
        $this->haciendollamada = $haciendollamada;
        
        //$this->estado = "encendido";
        //$this->haciendollamada = "NO";
    }

    //creamos los metodos
    //2-El método hacerllamada debe recibir el número al cual se va a llamar y asignarlo a la propiedad numeroLlamado y debe modificar la propiedad haciendoLlamada a Sí
    //7-Debe haber validaciones para por ejemplo no hacer una llamada si el celular está apagado. O hacer otra llamada si está haciendo una llamada.
    public function hacerLlamada($numerollamado){ //el metodo hacerLlamada() recibe como paramentro $numerollamado q es el numero al q se va a llamar
        if ($this->estado === "encendido" && $this->haciendollamada === "NO"){  //la condicion if verifica q el estado del celular sea "encendido"(esto asegura q el celular esté encendido para realizar la llamada) Y q el celular no esté en una llamada(esto garantiza q no se pueda realizar otra llamada cuando ya está en una)
            $this->numerollamado = $numerollamado;  //se asigna el valor del parámetro $numeroLlamado a la propiedad $numeroLlamado del objeto actual ($this), esto guarda el numero al q se va a llamar
            $this->haciendollamada = "SI";  //la propiedad $haciendollamada se establece en SI xq el celular está en medio de una llamada
            echo "Llamando al número: $numerollamado <br>"; 
        } else { //si el celular esta apagado o en medio de otra llamada muestra el siguiente mensaje
            echo "No se puede realizar la llamada <br>";
        }
    }

    //3-El método terminarLlamada debe modificar las propiedades respectivas
    public function terminarLlamada($numerollamado){
        if ($this->haciendollamada === "SI"){
            $this->numerollamado = $numerollamado;
            //$this->numerollamado = "";
            $this->haciendollamada = "NO";
            echo "Llamada finalizada <br>";
        } else {
            echo "No hay una llamada en curso <br>";
        }
    }

    //4-El método apagarCelular debe modificar las propiedades respectivas
    public function apagarCelular(){
        if ($this->estado === "encendido") {
            $this->estado = "apagado";
            echo "Celular apagado <br>";
        } else {
            echo "El celular ya está apagado <br>";
        }
    }

    //5-El método encenderCelular debe modificar las propiedades respectivas.
    public function encenderCelular(){
        if ($this->estado === "apagado"){
            $this->estado = "encendido";
            echo "Celular encendido <br>";
        } else {
            echo "El celular ya está encendido <br>";
        }
    }

    public function getEstado()
    {
        return "<br>
        Marca: $this->marca <br> 
        Color: $this->color <br> 
        Sistema Operativo: $this->so <br> 
        Número: $this->numero <br> 
        Número Llamado: $this->numerollamado <br> 
        Estado: $this->estado <br> 
        Haciendo Llamada?: $this->haciendollamada <br><br>";
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

    //6-Cree dos objetos tipo TelefonoCelular llamados celular1 y celular2. Imprima el estado de los dos objetos.
    //a $celular1 le asignamos los valores enviados desde el formulario
    //a $celular2 le asignamos valores manualmente
    $celular1 = new TelefonoCelular($marca, $color, $so, $numero, $numerollamado, $estado, $haciendollamada);
    $celular2 = new TelefonoCelular("Iphone", "Azul", "Iphone", "111222333", "666555666", "encendido", "SI");
    echo "<pre>";
    var_dump($celular1);
    var_dump($celular2);
    echo "</pre>";

    //imprimimos el estado de los celulares
    echo "<b>Estado del celular1: </b>" . $celular1->getEstado() . "<br>";
    echo "<b>Estado del celular2: </b>" . $celular2->getEstado() . "<br>";

    //8-Simule el siguiente comportamiento con el celular 1: ***Apague el celular***Haga una llamada***Termine la llamada***Encienda el celular***Termine la llamada(apagarCelular)***Imprima el estado del celular1
    echo "<b>Esta es una simulación de comportamiento con el celular1: </b><br>";
    echo $celular1->apagarCelular();
    echo $celular1->hacerLlamada($numerollamado);
    echo $celular1->terminarLlamada($numerollamado);
    echo $celular1->encenderCelular();
    echo $celular1->terminarLlamada($numerollamado);
    echo "<br>Estado del celular1: " . $celular1->getEstado() . "<br>";

    //9-Simule el siguiente comportamiento con el celular2: ***Haga una llamada***Imprima el estado del celular2
    echo "<b>Esta es una simulación de comportamiento con el celular2: </b><br>";
    $celular2->hacerLlamada($numerollamado);
    echo "<br>Estado del celular2: " . $celular2->getEstado() . "<br>";

}
?>