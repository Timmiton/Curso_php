<?php

# La funcion declare(strict_types=1); Hace que las Declaraciones de tipo escalar y devolucion sean muy estrictas
declare(strict_types=1);
function cuadrado(int $numero){
    return $numero * $numero;
}

$numero = 10;

echo 'El cuadrado de ' . $numero . ' es: ' . cuadrado($numero); 

?>
