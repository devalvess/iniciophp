<?php

   $titulo =  "Esse é o titulo da pagina";
   $subtitulo = "Este é o subtitulo da pagina";

   define('TITULO', 'Este titulo é uma constante');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1> <?php echo TITULO; ?> </h1>
    <h2>
        <?php echo $subtitulo; ?>
    </h2>

    <?php 
        $subtitulo = "este é um novo subtitulo";
        define('TITULO', 'Esta é outra constante modificada')
    ?>
    <hr>
    <h3> <?php echo $subtitulo; ?> </h3>
    <h2> <?php echo TITULO; ?> </h2>
    
</body>
</html>