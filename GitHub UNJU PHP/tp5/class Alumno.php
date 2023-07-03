<?php
class Alumno{ //creamos la clase Alumno y todas sus propiedades
    public $nombreAlumno;
    public $nota1;
    public $nota2;
    public $nota3;
    public $nota4;
    public $notaFinal;

    public function calcularNotaFinal(){ //creamos el metodo "calcularNotaFinal" q calcula la nota final segun los porcentajes dados en la consigna
        $notaFinal = ($this->nota1 * 0.15) + ($this->nota2 * 0.2) + ($this->nota3 * 0.25) + ($this->nota4 * 0.4);

        $this->notaFinal = $notaFinal;  //guardamos el resultado dentro del objeto Alumno
    }
}
?>