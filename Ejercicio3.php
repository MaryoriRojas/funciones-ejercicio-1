<?php

function ordenarArray($array) {

    // Obtener la cantidad de elementos en el arreglo

    $numElementos = count($array);
    
    // Algoritmo de ordenamiento burbuja

    for ($i = 0; $i < $numElementos; $i++) {
        for ($j = 0; $j < $numElementos - 1 - $i; $j++) {

            // Comparar elementos adyacentes y cambiar si están en el orden incorrecto

            if ($array[$j] > $array[$j + 1]) {
                // Intercambiar los elementos
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    
    return $array;
}

// Solicitar al usuario que ingrese los números

echo "Ingrese una lista de números separados por comas: ";
$entrada = readline();
$numeros = array_map('intval', explode(',', $entrada));

// Ordenar el arreglo

$numerosOrdenados = ordenarArray($numeros);

// Mostrar el arreglo ordenado

echo "Arreglo ordenado: ";
echo implode(", ", $numerosOrdenados);
echo "\n";