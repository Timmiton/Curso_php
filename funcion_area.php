<?php

function area_triangulo($base,$altura){
    $area = ($base * $altura) / 2;
    return $area;
}

$area_tri = area_triangulo(10,10);
echo "El resultado del Area del Triangulo es: $area_tri";

?>