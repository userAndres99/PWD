<?php
class Calculadora{

public function sumar($datos){
    $numero1 = (float)$datos['numero1'];
    $numero2 = (float)$datos['numero2'];
    
    $resultado = $numero1 + $numero2;

    return $resultado ;
}

public function resta($datos){
    $numero1 = (float)$datos['numero1'];
    $numero2 = (float)$datos['numero2'];
    
    $resultado = $numero1 - $numero2;

    return $resultado ;
    
}

public function multiplicacion($datos){
    $numero1 = (float)$datos['numero1'];
    $numero2 = (float)$datos['numero2'];
    
    $resultado = $numero1 * $numero2;

    return $resultado ;
    
}



}

?>