<?php
    include("./funciones.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escribir</title>
</head>
<body>
    <form action=`$action` method="post" name="escribir" enctype="multipart/form-data">
        <textarea name="textarea2" id="textarea2" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Volver" name="Volver">
        <input type="submit" value="Modificar" name="Modificar">
    </form>
</body>
</html>