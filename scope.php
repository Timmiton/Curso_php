<?php
    #El SCOPE DE PHP: Tambien conocido como el ámbito de las variables
    // Una funcion no puede acceder a una variable que este fuera de ella, y tampoco a la viceversa.
    // Para que una funcion pueda acceder a variables de afuera, se le tienen que mandar como parametros.

    // $numero = 7;

    function mostrarNumero(){
        $numero = 10;
        return $numero;
    }

    $numero = mostrarNumero();

    echo $numero;
?>