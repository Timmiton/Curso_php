<?php

$numero = 10.8928192;

# round($numero, decimales) Nos redondena nuestro numero, el parametro decimales es opcional y es para saber cuantos decimales mostrar
echo round($numero, 1);

echo '<br />';

# rand(desde que numero, hasta que numero) Nos regresa un numero aleatorio dentro del rango establecido
echo rand(1,10);

echo '<br />';

# ceil(numero) Si el numero tiene decimal, nos redonde la unidad hacia arriba
echo ceil(12.1);

echo '<br />';

# define('NOMBRE', valor) Nos permite definir una constate, M_PI ya es una constante definida en PHP
define('PI', 3.14);
echo PI . '   , ' . M_PI;



?>