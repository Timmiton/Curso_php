<?php


# COMPARADOR DE NAVE ESPACIAL

#    <   =   >
#    1   0   -1

function comparar($a, $b){
    return $a <=> $b;
}

$numeros = array(1,5,3,9,10,7);
usort($numeros, 'comparar');

echo implode(' - ', $numeros);

?>