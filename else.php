<?php

$mes = "Diciembre";
$verdadero = false;

if($verdadero){
    echo "<h1> VERDADERO </h1>";
} else {
    echo "<h1> FALSO </h1>";
}

if($mes == 'Diciembre'){
    echo "Feliz Navidad";
} else if($mes == 'Enero'){
    echo "Feliz Año Nuevo";
} else if($mes == 'Febrero'){
    echo "Feliz Dia de San Valnetin";
} else {
    echo "Ese mes no tiene Celebraciones";
}

?>