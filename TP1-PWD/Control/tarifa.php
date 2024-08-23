<?php 
class Tarifa{
    
    public function calculo($datos) {
        $edad = (int)$datos['edad'];
        $esEstudiante = $datos['estudiante'];
        
        if($esEstudiante == "si" ){
            if($edad < 12){
                $precio=160;
            }else{
                $precio=180;
            }
      
        }else{
            $precio=300;
        }
        
        return $precio;
    }
}