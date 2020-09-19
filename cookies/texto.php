<?php
    if(isset($_COOKIE['font-size'])){
        $tamaño = htmlspecialchars($_COOKIE['font-size']);
    }
    else{
        $tamaño = '10px';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style> 
    p {
        font-size: <?php echo $tamaño;?>
    }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sunt tempora explicabo? Repudiandae, nisi, dolore numquam alias suscipit nemo vel deserunt aspernatur voluptas quo, incidunt amet quod. Blanditiis, et quos.</p>
</body>
</html>