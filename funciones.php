<?php

#Las Funciones solo deben de hacer una cosa!. Una  y solo una 

function saludo($nombre){
    echo 'Saludo! ' . $nombre;
    echo '<br/>';
}

saludo('Ismael');


function sumar($numero1,$numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
}


$resultado = sumar(12,10);
$resultado2 = sumar(1,29);

echo $resultado;

?>