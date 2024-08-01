<?php

function FierroAlv() {
    $resultados = [];
    
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $resultados[] = "PesoPluma";
        } elseif ($i % 3 == 0) {
            $resultados[] = "Peso";
        } elseif ($i % 5 == 0) {
            $resultados[] = "Pluma";
        } else {
            $resultados[] = $i;
        }
    }
    echo implode(", ", $resultados) . "\n";
}

FierroAlv();