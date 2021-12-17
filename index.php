<?php

$paragrafo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, voluptatibus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, voluptatibus?. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, voluptatibus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, voluptatibus?';

$ParolaCensurata = $_GET['parola'];

$paragrafoCensurato =  str_replace($ParolaCensurata, "***", $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <h1 style="text-align: center;">PHP-Badwords</h1>

    <h2>Paragrafo non censurato</h2>
    <p><?php echo $paragrafo ?></p>
    <p>Il pragrafo scritto sopra è lungo <strong><?php echo strlen($paragrafo) ?></strong> caratteri.</p>

    <h2 style="display: inline-block;">Paragrafo censurato</h2>
    <h3 style="display: inline-block;">(dopo aver inserito la parola da censurare tramite il parametro GET)</h3>

    <p><?php echo $paragrafoCensurato ?></p>
    <p>Il pragrafo scritto sopra è lungo <strong><?php echo strlen($paragrafoCensurato) ?></strong> caratteri.</p>
    <p>Parola censurata: <?php echo $ParolaCensurata ?></p>


</body>

</html>