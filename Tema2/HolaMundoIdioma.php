<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolaMundoIdioma</title>
</head>
<body>
    <?php

        $langes = "Hola";
        $langen = "Hello";
        $langpt = "Olá";
        $langfr = "Salut";
        $langde = "Hallo";
        
        $elegido = "lang".$_GET['lang'];

        echo $$elegido;

    ?>
</body>
</html>