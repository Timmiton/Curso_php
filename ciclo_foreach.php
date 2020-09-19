<?php

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre','Diciembre');
$amigo = array('nombre' => 'Ismael', 'edad' => 20, 'telefono' => 5540692606, 'pais' => 'Mexico')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> MESES </h1>
    <ul>
        <?php
            foreach($meses as $mes){
                echo '<li>' . $mes . '</li>';
            }
        ?>
    </ul>
    <h1> MI AMIGO </h1>
    <ul>
        <?php
            foreach($amigo as $dato => $valor){
                echo '<li>' . $dato . ': '. $valor . '</li>';
            }
        ?>
    </ul>
</body>
</html>