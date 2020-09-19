<?php
// Notas:
# Las variables son sensibles a las mayusculas y minusculas
# Las variables no pueden comenzar con numeros o contener caracteres especiales



// String: Cadena de Texto
$nombre = "Alex";
// Integer: Numeros Enteros
$numero = 10;
// Double: Numeros Decimales
$numero_decimal = 19.99;
// Boolean: True o False
$verdadero = false;

#Array: Arreglo
#Object: Objeto
#Class: Clase
#Null: Cuando a una variable no se le ha asignado ningun valor
$edad;

// Comillas dobles vs comillas sencillas
# Las comillas dobles pueden contener variables
echo "Webos al $nombre, $numero";
# Las comillas sencillas no pueden contener variables, por lo que se tienen que concatenar con un un punto.
echo 'Webos al ' . $nombre . ' ' . $numero;


// Funcion para conocer el tipo de dato de una variable

echo gettype($numero_decimal);

?>