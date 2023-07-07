<?php 
namespace MyNamespace;
class Persona {
    protected $nombre;
    protected $nacimiento;
    protected $direccion;
    protected $sexo;
    protected $disponibilidad;
    protected $puesto;

    public function __construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto) {
        $this->nombre = $nombre;
        $this->nacimiento = $nacimiento;
        $this->direccion = $direccion;
        $this->sexo = $sexo;
        $this->disponibilidad = $disponibilidad;
        $this->puesto = $puesto;
    }
}

/********** POSTULANTE **********/


/*********** EMPLEADO ***********/


?>