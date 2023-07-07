<?php //include 'CPerson.php';
namespace MyNamespace;
//¿Qué son los espacios de nombres?
//Los espacios de nombres son una forma de organizar y agrupar clases, interfaces, funciones y constantes en PHP. Proporcionan un mecanismo para evitar conflictos de nombres entre diferentes componentes de tu código y permiten una mejor modularidad y reutilización del código.

class Empleado extends Persona{
    protected $ingreso;

    public function __construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $ingreso){
        parent::__construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto); //esta linea llama al constructor de la clase padre Person pasando sus parámetros, esto permite que la clase Empleado herede las propiedades definidas en la clase Person
        $this->ingreso = $ingreso;
    }

    //DateTime: https://www.php.net/manual/es/class.datetime.php
    //diff(): https://www.php.net/manual/es/datetime.diff.php
    //DateInterval: https://www.php.net/manual/es/class.dateinterval.php
    public function calcularAntiguedad(){
        $ingreso = new \DateTime($this->ingreso); //creamos un nuevo objeto "DateTime" a partir de la fecha de ingreso almacenada en $ingreso
        $hoy = new \DateTime(); //creamos otro objeto DateTime" sin pasarle ningun parametro para almacenar la fecha y hora actual
        $diferencia = $hoy->diff($ingreso); //utilizamos el metodo diff() del objeto $hoy para calcular la diferencia entre las dos fechas ($hoy e $ingreso). Esto devuelve un objeto DateInterval q contiene la diferencia entre las dos fechas en años, meses, dias, horas, minutos y segundos. Para la clase Empleado me interesa almacenar los años. Asigno el valor en la variable $anios:
        $anios = $diferencia->y;
        return "La antiguedad es de: $anios años.";
    }

    //metodo estatico: https://www.php.net/manual/es/language.oop5.static.php
    public static function mostrarPuestos(){
        $puestos = array("Informatica", "Contable", "RRHH"); //definimos un array llamado $puestos que contiene los puestos existentes
        foreach ($puestos as $puesto) { //recorremos el array con un bucle foreach
            echo $puesto . "<br>"; //y mostramos cada puesto existente en pantalla
        }
    }
}
/*
class Empleado extends Persona{
    protected $basico;

    public function __construct($basico){
        $this->basico = $basico;
    }

    public function calcularSueldo($cantidad){
        return $this->basico;
    }
/*
    protected function calcularSueldo(){
        $basico = $_POST ["basico"];
        $cantidad = $_POST ["cantidad"];
        
        $sueldo = $basico + $cantidad;
    }

}
*/

class Informático extends Empleado{
    public function calcularSueldo($cantidad){
        if ($cantidad <= 5){
            $trabajo = ($cantidad * 10000); //montos fijos
        } else {
            $trabajo = ($cantidad * 20000);
            return $trabajo;
        }
        echo "Tu sueldo como Informático es: $" . $trabajo;
        //$trabajo = $cantidad <= 5 
    }
}



?>