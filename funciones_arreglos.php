<?php

$amigo = array('telefono' => 5540692606, 'edad' => 20, 'pais' => 'mexico');

# extract($arreglo_asociativo) nos sirve para extraer los indices del arreglo como variables
extract($amigo);
echo $telefono;

echo '<br/>';

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

# array_pop($arreglo) nos permite sacar y eliminar el ultimo elemento del arreglo
$ultimo_dia = array_pop($semana);

foreach($semana as $dia){
    echo $dia . '<br/>';
}

# join(' simbolo ', $arreglo) recorre todo el arreglo y separa cada uno de los elemento por el simbolo indicado
echo join(', ', $semana);

echo '<br />';

# count($arreglo) cuenta los elementos que contiene un arreglo
echo count($semana) . '<br/>';

# sort($arreglo) ordena ascendentemente los elementos de un arreglo
sort($semana);
echo join(' - ', $semana);

echo '<br />';

# rsort($arreglo) ordena descendente los elementos de un arreglo
rsort($semana);
echo join(' - ', $semana);

echo '<br />';

# array_reverse($arreglo) invierte los elementos de un arreglo, el primero pasara a ser el ultimo y el ultimo el primero
$semana_inversa = array_reverse($semana);
echo join(' - ', $semana_inversa);

?>