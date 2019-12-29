<?php

namespace App\Context\EggDropper\Calculator;

final class EggDropperCalculator
{
    /**
     * Obtener el mínimo número de intentos necesarios en el
     * peor de los casos para n huevos y n pisos
     */
    public static function calculate(int $eggs, int $floors): int
    {
        // Creamos una matriz 2D que represente el mínimo de intentos necesarios
        $numberOfTrials[$floors + 1][$eggs + 1] = [];

        // Inicializamos la matriz con los casos básicos
        // Si no hay huevos, no necesitamos realizar intentos
        for ($floor = 0; $floor <= $floors; $floor++) {
            $numberOfTrials[$floor][0] = 0;
        }

        // Si no hay pisos, no necesitamos realizar intentos
        for ($egg = 0; $egg <= $eggs; $egg++) {
            $numberOfTrials[0][$egg] = 0;
        }

        // Si solo hay 1 huevo, el número de intentos necesarios es igual al número de pisos
        for ($floor = 0; $floor <= $floors; $floor++) {
            $numberOfTrials[$floor][1] = $floor;
        }

        // Si solo hay 1 piso, solo necesitamos realizar 1 intento
        for ($egg = 0; $egg <= $eggs; $egg++) {
            $numberOfTrials[1][$egg] = 1;
        }

        // Si hay más de 1 huevo y más de 1 piso, recorremos el total de huevos y pisos
        // para encontrar el número de intentos necesarios
        for ($egg = 2; $egg <= $eggs; $egg++) {
            for ($floor = 2; $floor <= $floors; $floor++) {
                $minDrops = PHP_INT_MAX;
                // Elegimos un suelo entre el 1 - piso
                for ($i = 1; $i <= $floor; $i++) {
                    // Encontramos casos donde el huevo se rompe y no se rompe
                    $criticalFloor = max(
                        $numberOfTrials[$i - 1][$egg - 1],
                        $numberOfTrials[$floor - $i][$egg]
                    );
                    $criticalFloor++;
                    // Tomamos el mínimo entre todos los pisos posibles
                    $minDrops = min($minDrops, $criticalFloor);
                }
                // Almacenamos la respuesta
                $numberOfTrials[$floor][$egg] = $minDrops;
            }
        }

        return $numberOfTrials[$floors][$eggs];}
}
