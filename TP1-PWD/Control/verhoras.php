<?php

class Horas {

    public function calcularHoras($array){
        $totalHoras = 0;

        // Sumar las horas de cada día
        foreach ($array as $dia => $horas) {
            $totalHoras += (int)$horas; // Convertir a entero y sumar al total
        }

        return $totalHoras;
    }
}

?>