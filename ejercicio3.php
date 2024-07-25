<?php
function ordenarArray($numero){
    $numero = array_filter($numero, function($v) { return $v !== 0; }); 
    $cantidad = count($numero);
    
    for ($i = 0; $i < $cantidad;$i++){
        for ($j = 0; $j < $cantidad - $i - 1; $j++){
            if ($numero[$j] < $numero[$j + 1]){
                $cambio = $numero[$j];
                $numero[$j] = $numero[$j + 1];
                $numero[$j + 1] = $cambio;
            }
        }
    }
    return $numero;
}

echo "Ingrese numeros al azar para ordenarlos de mayor a menor:\n";
$numero = readline();
$numero = array_map('intval', explode( ' ',$numero));
echo "Los numeros proporcionados ordenados de mayor a menor quedan asi: \n";
$ordenados = ordenarArray($numero);
echo implode(" , " , $ordenados);

?>