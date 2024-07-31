<?php

function esPalindromo($frase)
{
    $cambiarAMinusculas = strtolower($frase);

    $quitarEspacios = preg_replace('/[^a-z0-9]/', '', $cambiarAMinusculas);

    if ($quitarEspacios === strrev($quitarEspacios)) {
        return "Es un palíndromo";
    } else {
        return "No es un palíndromo";
    }
}

$frase = readline("Ingrese una frase o palabra que sea palíndromo: ");
$resultado = esPalindromo($frase);
echo $resultado . "\n";