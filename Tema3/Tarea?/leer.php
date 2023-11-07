<?php
    include("./funciones.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer</title>
</head>
<body>
    <form action=`$action` method="post" name="leer" enctype="multipart/form-data">
        <textarea name="textarea" id="textarea" cols="30" rows="10"><?
            leerFichero();
        ?>
        </textarea>
        <br>
        <input type="submit" value="Volver" name="Volver">
        <input type="submit" value="Guardar" name="Guardar">
    </form>
</body>
</html>