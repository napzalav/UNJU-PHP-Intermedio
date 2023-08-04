<?php
class CabeceraPagina { //se crea la clase CabeceraPagina y los atributos titulo, ubicacion, colorFondo y fuente
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
?>