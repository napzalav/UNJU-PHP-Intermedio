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
}


?>