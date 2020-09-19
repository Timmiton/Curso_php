<?php

#Forma 1 de saber si se han enviado correctamente con un formulario
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo 'Se enviaron por Get';
    }else{
        echo 'Se enviaron por Post';
    }

    echo '<br/>';

#Forma 2 de saber si se han enviado correctamente con mas formularios
    if(isset($_POST['submit_formulario1'])){
        echo 'Han llegado los datos del formulario 1';
    }
    if(isset($_POST['submit_formulario2'])){
        //CODIGO
    }
?>