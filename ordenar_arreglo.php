<?php

    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre','Diciembre');
    #Con sort podemos ordenar el arreglo de forma ascendente 
    // sort($meses);
    #Con rsort podemos ordenar el arreglo de forma descente
    rsort($meses);

    $numeros = array(20,9,2,100,98,6);

    sort($numeros);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>
    <h1> Meses del Año</h1>
    <ul>
        <?php

            foreach($meses as $mes){
                echo '<li>' . $mes . '</li>';
            }

            foreach($numeros as $numero){
                echo '<li>' . $numero . '</li>';
            }
        
        ?>
    </ul>
</body>
</html>