<?php

function sumaDigitos($numero) {
    $numero = abs($numero);
    $numeroCadena = (string)$numero;
    $suma = 0;
    $operacion = '';
    
    for ($i = 0; $i < strlen($numeroCadena); $i++) {
        $digito = $numeroCadena[$i];
        $suma += $digito;
        
        if ($i > 0) {
            $operacion .= ' + ';
        }
        $operacion .= $digito;
    }
    return ['suma' => $suma, 'operacion' => $operacion];
}

echo "Ingrese un número entero: ";
$numero = (int)readline();
$resultado = sumaDigitos($numero);

echo "La operación es: " . $resultado['operacion'] . "\n";
echo "La suma de los dígitos de $numero es " . $resultado['suma'] . ".\n";