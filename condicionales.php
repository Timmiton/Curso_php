<?php

$edad = 18;
$nombre = 'Carlos';

//Operadores 
# Mayor Que >
# Menor Que <
# Igual Que ==
# Mayor o Igual Que >=
# Menor o Igual Que <=
# Diferente De !=
# Negacion !

// Operadores Lógicos
# &&  Evalua que se cumplan las dos o mas condiciones
# ||, OR Evalua que se cumpla alguna de las condiciones
# xor Evalua que se cumpla una y solo una condicion

if($edad >= 18 && $nombre == 'Carlos')
    echo "<h1> Bienvenido </h1>";
else
    echo "Eres Menor de Edad";
?>