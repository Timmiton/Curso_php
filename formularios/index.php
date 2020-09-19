<?php
    if($_POST){
        echo $_POST['nombre'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <input type="text" placeholder="Nombre:" name="nombre">
        <br/>
        <label for="hombre">Hombre:</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">

        <label for="mujer">Mujer:</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        
        <br/>

        <select name="year" id="year">
            <?php 
                for($i = 1990; $i <2010; $i++ ){
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <br/>
        <label for="terminos">Aceptar Terminos:</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>