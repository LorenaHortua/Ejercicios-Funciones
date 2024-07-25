<?php

function esPalindromo($cadenaTexto){
    $cadenaTexto = strtolower($cadenaTexto);

    $cadenaTexto = preg_replace('/\s/', '',$cadenaTexto);

    $cadenaInvertida = strrev($cadenaTexto);

    return $cadenaTexto ===  $cadenaInvertida;
}

$cadenaInvertida = "Adan no cede con Eva, Yave no cede con nada.";
if (esPalindromo($cadenaTexto)) {
    echo "La cadena no es un palindromo.";
}
?>