<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $saludos = $_GET['num'];
    if ($saludos == 42){
        echo '<h1> Me has pedido que te salude ' . $saludos . ' veces </h1>';
    }
    else{
        for ($i = 0; $i < $saludos; $i++) {
            echo '<p>' . $i . ' - ¡Hola Mundo!</p>';
        }
    }
    ?>
</body>
</html>