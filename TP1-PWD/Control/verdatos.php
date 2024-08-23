<?php

class Datos {

    //ejercicio 3
    public function mostrarDatos($array){

        $mensaje = "Hola, yo soy " . 
        $array['nombre'] .
         " " . $array['apellido'] . 
         ", tengo " . $array['edad'] . 
         " años y vivo en " . 
         $array['direccion'] . ".";

        return $mensaje;
    }

    //ejercicio 4
    public function procesarEdad($datos) {
        // Verificar si la edad es válida
        $mensaje="";

        if ($datos['edad'] >= 18) {

            $mensaje= "Eres mayor de edad, ya que tienes " . $datos['edad'] . " años.";
        } else {
            $mensaje= "No eres mayor de edad, ya que tienes " . $datos['edad'] . " años.";
        }

        return $mensaje;
    }

    
    public function obtenerNivelEstudio($datos) {
        $nivel = $datos['nivelEstudio'];
        $mensaje = "";
        
        switch ($nivel) {
            case '1':
                $mensaje = "No tiene estudios";
                break;
            case '2':
                $mensaje = "Estudios primarios";
                break;
            case '3':
                $mensaje = "Estudios secundarios";
                break;
            default:
                $mensaje = "Nivel de estudio desconocido";
                break;
        }
        return $mensaje;
    }

    //ejercicio 5
    public function obtenerSexo($dato) {
        $sexo=$dato['sexo'];
        switch ($sexo) {
            case 'M':
                return 'Masculino';
            case 'F':
                return 'Femenino';
            case 'O':
                return 'Otro';
            default:
                return 'No especificado';
        }
    }

    //ejercicio 6
    public function contarDeportes($datos) {
        $deportesSeleccionados = 0;
        if (isset($datos['deportes'])) {
            $deportesSeleccionados = count($datos['deportes']);
        }
        return $deportesSeleccionados;
    }
}

?>