<?php

$paises = array('Mexico', 'Portugal', 'Chile', 'Paraguay', 'Estados Unidos', 'Brasil');
$animales = array('Perro', 'Gato', 'Cocodrilo', 'Tortuga', 'Sillon', 'Camaleon');

#Cuando encuentres Portugal ya no imprimas los demas paises

foreach($paises as $pais){
    echo $pais . '<br/>';

    if($pais == 'Portugal'){
        break;
    }
} 

echo '<br />';

foreach($animales as $animal){
    if($animal == 'Sillon'){
        continue;
    }
    echo $animal . '<br />';
}

?>
