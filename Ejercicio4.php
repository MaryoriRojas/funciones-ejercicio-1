<?php

function sumarDigitos($numero) {
    $numero = abs($numero);
    $numeroCadena = (string)$numero;
    $suma = 0;

    for ($i = 0; $i < strlen($numeroCadena); $i++) {
        $suma += $numeroCadena[$i];
    }
    return $suma;
}

echo "Ingrese un número entero: ";
$numero = (int)readline();

$suma = sumarDigitos($numero);

echo "La suma de los dígitos de $numero es $suma.\n";