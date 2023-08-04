<?php
//consigna1
function producto($valor1, $valor2){
    $producto = $valor1 * $valor2;
    return $producto;
}

//consigna2
//Para esta funcion, utilizo el "operador de módulo (%)" ya que este obtiene el resto(o residuo) de la division de un numero entre otro. Si ponemos en una calculadora cientifica de windows el siguiente ejemplo: 77 mod 2 = 1
//vemos que el modulo de 77 dividido entre 2 deja un resto de 1, por lo tanto 77 NO es par, es IMPAR
function paridad($numero){
    if ($numero % 2 == 0) {
        return "El número $numero es PAR";
    } else {
        return "El número $numero es IMPAR";
    }
}

//consigna2alternativa
function verificar($numero){ //la función "verificar" toma el numero almacenado en la variable $numero que ingresamos por el formulario y determina si es par o impar
    return $numero % 2 == 0; //esta porcion nos arroja TRUE o FALSE. nos dice si el "resto" de la division es igual a 0, por ejemplo, ingresamos como valor un 4, (si comprobamos en la calculadora de windows ponemos 4 mod 2= y nos entrega 0 de resultado)
    //0 == 0 es TRUE entonces cumple la condicion y arroja como resultado "PAR"
}

//consigna4
function mayus($cadena){
    $cadenaMayus  = strtoupper($cadena);
    return $cadenaMayus;
    }

//consigna5
function infoCuadrado($lado){
    $perimetro = (4*$lado);
    $superficie = $lado * $lado;
    return array($perimetro, $superficie);  //almaceno los resultados de perimetro y superficie en un array
}

?>