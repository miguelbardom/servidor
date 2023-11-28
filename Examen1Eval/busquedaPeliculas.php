<?php
    include("./funciones.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="leer" enctype="multipart/form-data">
        <textarea name="textarea" id="textarea" cols="50" rows="10"><?
            leeFichero();
        ?>
        </textarea>
        <br>
    </form>
</body>
</html>