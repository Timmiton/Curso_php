<?php
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['email'];
        $errores = '';
        if(!empty($nombre)){
            //$nombre = trim($nombre);
            //$nombre = htmlspecialchars($nombre);
            //$nombre = stripslashes($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            echo 'Tu nombre es: ' . $nombre . '<br/>';
        }else{
            $errores .= 'Por favor ingresa tu nombre <br/>';
        }
        if(!empty($correo)){
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
                echo 'Tu correo es: ' . $correo . '<br/>';
            }else{
                $errores .= 'Por favor ingresa un correo valido' . '<br/>';
            }
        }else{
            $errores .= 'Por favor ingresa un correo electronico' . '<br/>';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color:red}
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" name="nombre" placeholder='Nombre'>
        <input type="email" name="email" placeholder='email'>
        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores?></div>
        <?php endif;?>
        <input type="submit" value="Enviar" name='submit'>
    </form>
</body>
</html>