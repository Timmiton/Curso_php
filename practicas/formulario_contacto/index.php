<?php
    $errores = '';
    $enviado = false;
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['descripcion'];
        if(!empty($nombre)){
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);  
        }else{
            $errores .= 'Por favor ingresa un Nombre' . '<br/>';
        }
        if(!empty($correo)){
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores .= 'Por favor ingresa un correo valido' . '<br/>';
            }
        }else{
            $errores .= 'Por favor ingresa un correo' . '<br/>';
        }
        if(!empty($mensaje)){
            $mensaje = trim($mensaje);
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = stripcslashes($mensaje);
        }else{
            $errores .= 'Por favor agrega un mensaje' . '<br/>';
        }
        if(empty($errores)){
            $enviar_a = 'ismael-ortega1@gmail.com';
            $asunto = 'Correo enviado desde miFormulario.com';
            $mensaje_preparado = "De: $nombre \n";
            $mensaje_preparado .= "Correo: $correo \n";
            $mensaje_preparado .= "Mensaje: $mensaje";

            //mail($enviar_a, $asunto, $mensaje_preparado);
            $enviado = true;
        }
    }

    
    require 'index.view.php';


?>