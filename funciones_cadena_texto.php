<?php

#Para seguridad podemos proteger la entrada de datos con esta funcion, para evitar injeccion de informacion
$texto = ' &, <, >, " ';
echo htmlspecialchars($texto);

echo '<br/>';

#Esta funcion elimina todos los espacios en blanco, del inicio y el final de la cadena
$cadena_con_espacios = "   Hola Guapo    ";
echo trim($cadena_con_espacios);

echo '<br />';

#Esta funcion devuelve la cantidad de caracteres que contiene la cadena
$saludo = "Hola!";
echo strlen($saludo);

echo '<br />';

#Esta funcion regresa una parte de la cadena, substr(cadena, desde donde, hasta donde);
echo substr($saludo, 0, 3);

echo '<br />';

#Esta funcion pone toda la cadena en Mayusculas
echo strtoupper($saludo);

echo '<br />';

#Esta funcion pone toda la cadena en minusculas
echo strtolower($saludo);

echo '<br />';

#Esta funcion devuelve la posicion en la que se encuentra el caracter que se requiere, dentro de la cadena
echo strpos($saludo, 'l');
?>