<?php
function sumaDigitos($numero) {
    $suma = 0;
    $numero = abs($numero); 
    while ($numero > 0) {
        $suma += $numero % 10;
        $numero = intval($numero / 10); 
    }
    return $suma;
}

$numero = 2213;
$resultado = sumaDigitos($numero);
echo "La suma de los dígitos de $numero es: $resultado";
?>