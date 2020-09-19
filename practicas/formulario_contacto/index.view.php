<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class='wrap'>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> " method='post'>
            <input type="text" placeholder='Nombre' name="nombre" class='form_control' id='nombre' value="<?php if(!$enviado && isset($nombre)){echo $nombre;}?>">
            <input type="text" placeholder='Correo' name="correo" class='form_control' id='correo' value="<?php if(!$enviado && isset($correo)){ echo $correo;}?>">
            <textarea name="descripcion" cols="30" rows="5" class='form_control' id='mensaje' placeholder='Mensaje' ><?php if(!$enviado && isset($mensaje)){ echo $mensaje;}?></textarea>
            <?php if(!empty($errores)) :?>
                <div class='alert error'>
                    <?php echo $errores;?>
                </div>
            <?php elseif($enviado):?>
                <div class='alert successfull'>
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif ?>
            <input type="submit" name='submit' class='boton' value="Enviar Correo">
        </form>
    </div>
</body>
</html>