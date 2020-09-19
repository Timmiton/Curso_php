<?php
# El método GET nos pasa los parametros mediante el url, por lo que se puede modificar directamente por ahi


//print_r($_GET);
if(!$_GET){
    header('Location: http://localhost/cursoPHP/formularios/');
}
    $nombre = $_GET['nombre'];
    $sexo = $_GET['sexo'];
    $year = $_GET['year'];
    $terminos = $_GET['terminos'];
    echo "Hola $nombre, eres $sexo";

?>
