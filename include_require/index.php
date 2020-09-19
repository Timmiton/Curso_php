<?php

function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
}


# Nos permite conectar archivos a nuestro archivo actual, lo podemos hacer con include o require
# INCLUDE : include si no llega a encontrar el archivo o tiene problemas para conectarlo, solo marca warning
#            y  se sigue ejecutando el resto del codigo.
# REQUIRE : require si no llega a encontrar el archivo, esta mal escrito o tiene problemas, entonces marca un
#           FatalError y no permite que se ejecute el archivo actual.

# Utilizar include cuando el archivo que queremos conectar no sea muy importante y el usuario pueda visualizar el resto
# Utilizar require cuando el archivo que queremos conectar sea una base de datos muy importante o algo importante,
# para que no permita que se visualice nada.


// include 'vista.php';
require 'vista.php';


# Estos nos permiten solo traer una y sola una vez el archivo que conectamos.

//include_once 'vista.php';
//require_once 'vista.php';
?>