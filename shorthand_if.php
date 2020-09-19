<?php

# ((condicion) ? //Si se cumple : //Si no se cumple);

    $edad = 18;
    $edad = (isset($edad)) ? $edad : "El usuario no establecio su edad";

    echo 'Edad: ' . $edad;
?>