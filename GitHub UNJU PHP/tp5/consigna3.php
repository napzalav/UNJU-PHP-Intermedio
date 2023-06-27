<?php
echo '<a href="http://localhost/unju/tp5/consigna3.html">Inténtalo de nuevo</a><br><br>';

class CabeceraPagina { //se crea la clase CabeceraPagina
    public $titulo;
    public $ubicacion;
    public $colorFondo;
    public $fuente;

    public function __construct($titulo, $ubicacion, $colorFondo, $fuente) { //reemplazo el nombre de mi funcion por __construct() ya q inicializa los atributos del objeto q creamos
        $this->titulo = $titulo;
        $this->ubicacion = $ubicacion;
        $this->colorFondo = $colorFondo;
        $this->fuente = $fuente;
    }

    public function mostrarCabecera() {
        echo '<div style="background-color: ' . $this->colorFondo . '; color: ' . $this->fuente . ';">';
    
        $style = ''; // Variable para almacenar los estilos adicionales para la etuiqueta <h1>. Dependiendo de la ubicacion seleccionada y procesada en el switch almacenará "center", "left" o "right"
    
        switch ($this->ubicacion) { //con switch se evalua el valor almacenado en la propiedad $ubicacion
            case 'centro': //case verifica que el valor de $ubicacion elegido mediante el formulario sea "centro", funciona de la misma forma para los casos "derecha" y "izquierda"
                $style = 'text-align: center;';
                break;
            case 'derecha':
                $style = 'text-align: right;';
                break;
            case 'izquierda':
                $style = 'text-align: left;';
                break;
        }
    
        echo '<h1 style="' . $style . '">' . $this->titulo . '</h1>'; //se aplica el estilo directamente en la etiqueta <h1>.
    
        echo '</div>';

        //revisando valores
        echo "<pre>";
        var_dump($this->titulo);
        var_dump($this->ubicacion);
        var_dump($this->colorFondo);
        var_dump($this->fuente);
    }
}

//para obtener los valores del formulario y comprobamos que no se encuentre vacio y que se haya hecho click en el boton con el nombre "submit"
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

/* Esta porcion de codigo la retiro xq tiene el error de que la alineacion seleccionada mediante el formulario no la imprimia y no se mostraba en la pagina. Se solucionó y cambio el codigo guardando los datos en la variable $style e imprimiendo este resultado directamente en la etiqueda <h1>

public function mostrarCabecera() {
        echo '<div style="background-color: ' . $this->colorFondo . '; color: ' . $this->fuente . ';">';

        switch ($this->ubicacion) { //con switch se evalua el valor almacenado en la propiedad $ubicacion
            case 'centro': //case verifica que el valor de $ubicacion elegido mediante el formulario sea "centro", funciona de la misma forma para los casos "derecha" y "izquierda"
                echo '<h1 class="center">' . $this->titulo . '</h1>'; //si es "centro" va a imprimir el titulo ingresado mediante el formulario dentro de la etiqueta <h1> con la clase CSS "center"
                break; //indica que el caso fue encontrado y debe salir del switch
            case 'derecha':
                echo '<h1 class="right">' . $this->titulo . '</h1>';
                break;
            case 'izquierda':
                echo '<h1 class="left">' . $this->titulo . '</h1>';
                break;
        }
        echo '</div>';
*/
?>