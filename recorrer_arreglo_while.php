<?php

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre','Diciembre');

$contador = 0;

while($contador < count($meses)){
    echo $meses[$contador] . '<br />';
    $contador++;
}

?>