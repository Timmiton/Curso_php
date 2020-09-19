<?php
//Los arreglos son variables que nos permiten almacenar multiples valores

#Existen dos tipos de Arreglos el indexado y el asociativo, se diferencian por la forma en acceder a sus valores

#Los indexados son los que tiene el indice para acceder a ellos.

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril'];

#Los arreglos pueden guardar cualquier tipo de dato, no necesariaremente sus elementos deben ser del mismo tipo

echo $semana[0] . '<br />';
$semana[7] = 'DominLun';
echo $semana[7] . '<br />';
echo $meses[1] . '<br />';




?>