<?php
# Utilizar el método Post cuando estemos trabajando con informacion sensible o informacion que se tenga que 
# meter en una Base de Datos. Los parametros se pasan por detrás del navegador

//print_r($_POST);

if(!$_POST){
    header('Location: http://localhost/cursoPHP/formularios/');
}
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];
    echo "Hola $nombre, eres $sexo";

?>