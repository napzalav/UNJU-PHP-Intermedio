<?php //include 'CPerson.php';
namespace MyNamespace;
class Postulante extends Persona {
    protected $cv;

    public function __construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $cv){
        parent::__construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto); //esta linea llama al constructor de la clase padre Persona pasando sus parámetros, esto permite que la clase Postulante herede las propiedades definidas en la clase Persona
        $this->cv = $cv;
    }

    //DateTime: https://www.php.net/manual/es/class.datetime.php
    //diff(): https://www.php.net/manual/es/datetime.diff.php
    //DateInterval: https://www.php.net/manual/es/class.dateinterval.php
    public function calcularEdad() {
        $nacimiento = new \DateTime($this->nacimiento); //creamos un nuevo objeto "DateTime" a partir de la fecha de nacimiento almacenada en $nacimiento
        $hoy = new \DateTime(); //creamos otro objeto DateTime" sin pasarle ningun parametro para almacenar la fecha y hora actual
        $diferencia = $hoy->diff($nacimiento); //utilizamos el metodo diff() del objeto $hoy para calcular la diferencia entre las dos fechas ($hoy y $nacimiento). Esto devuelve un objeto DateInterval q contiene la diferencia entre las dos fechas en años, meses, dias, horas, minutos y segundos. A mi me interesa almacenar todos los datos. Asigno todos los valores en sus respectivas variables:
        $anios = $diferencia->y;
        $meses = $diferencia->m;
        $dias = $diferencia->d;
        $horas = $diferencia->h;
        $minutos = $diferencia->i;
        $segundos = $diferencia->s;
        return "La edad es de: $anios años, $meses meses, $dias dias, $horas horas, $minutos minutos, $segundos segundos.";
    }
}

?>