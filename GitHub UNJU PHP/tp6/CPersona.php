<?php
//namespace MyNamespace;
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
        return "$anios años, $meses meses, $dias dias, $horas horas, $minutos minutos, $segundos segundos.";
    }
}

/*********** EMPLEADO ***********/
class Empleado extends Persona{
    protected $ingreso; //para calcularAntiguedad()
    protected $basico; //para calcularSueldo()

    public function __construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $ingreso, $basico) {
        parent::__construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto); //esta linea llama al constructor de la clase padre Persona pasando sus parámetros, esto permite que la clase Empleado herede las propiedades definidas en la clase Persona
        $this->ingreso = $ingreso;
        $this->basico = $basico;
    }

    //DateTime: https://www.php.net/manual/es/class.datetime.php
    //diff(): https://www.php.net/manual/es/datetime.diff.php
    //DateInterval: https://www.php.net/manual/es/class.dateinterval.php
    public function calcularAntiguedad(){
        $ingreso = new \DateTime($this->ingreso); //creamos un nuevo objeto "DateTime" a partir de la fecha de ingreso almacenada en $ingreso
        $hoy = new \DateTime(); //creamos otro objeto DateTime" sin pasarle ningun parametro para almacenar la fecha y hora actual
        $diferencia = $hoy->diff($ingreso); //utilizamos el metodo diff() del objeto $hoy para calcular la diferencia entre las dos fechas ($hoy e $ingreso). Esto devuelve un objeto DateInterval q contiene la diferencia entre las dos fechas en años, meses, dias, horas, minutos y segundos. Para la clase Empleado me interesa almacenar los años. Asigno el valor en la variable $anios:
        $anios = $diferencia->y;
        return "$anios años.";
    }

    // **************** CONSIGNA 3 - METODO ESTATICO****************
    //metodo estatico: https://www.php.net/manual/es/language.oop5.static.php
    public static function mostrarPuestos(){
        $puestos = array("Informatica", "Contable", "RRHH"); //definimos un array llamado $puestos que contiene los puestos existentes
        foreach ($puestos as $puesto) { //recorremos el array con un bucle foreach
            echo $puesto . "<br>"; //y mostramos cada puesto existente en pantalla
        }
    }

    // ******************** CONSIGNA 4 ********************
    //public function __construct($basico){
    //    $this->basico = $basico;
    //}

    public function calcularSueldo($cantidad){
        return $this->basico;
    }
}

/*********** EMPLEADO CONTABLE ***********/
class Contable extends Empleado {
    public function calcularSueldo($cantidad) {
        if ($cantidad <= 5) {
            $extra = 50000;
        } else {
            $extra = 80000;
        }
        return $this->basico + $extra;
    }
}

/*********** EMPLEADO RRHH***********/
class RRHH extends Empleado {
    public function calcularSueldo($cantidad) {
        if ($cantidad <= 5) {
            $extra = 20000;
        } else {
            $extra = 30000;
        }
        return $this->basico + $extra;
    }
}

/*********** EMPLEADO INFORMATICO***********/
class Informatico extends Empleado {
    public function calcularSueldo($cantidad) {
        if ($cantidad <= 5) {
            $extra = 10000;
        } else {
            $extra = 20000;
        }
        return $this->basico + $extra;
    }
}

?>