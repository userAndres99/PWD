
<?php

class Numero {

    public function devolverSigno($array){

        //inicializamos el mensaje vacio
        $mensaje = "";

        //si el numero es mayor a 0
        if ($array['numero_form'] > 0) {
            $mensaje = "positivo";
    
        //si el numero es igual a 0
        } elseif ($array['numero_form'] == 0) {
            $mensaje = "cero";
    
        //si el numero es menor a 0
        } elseif ($array['numero_form'] < 0) {
            $mensaje = "negativo";

        //o sino por defecto
        }else{
            $mensaje = "incorrecto";
        }
        return $mensaje;
       
    }
}





