<?php
    include("./funciones.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escribir</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <form action="" method="post" name="escribir" enctype="multipart/form-data">
        <textarea name="textarea2" id="textarea2" cols="30" rows="10"><?php
            leerFichero();
            //escribirFichero();
        ?></textarea>
        <br>
        <input type="submit" value="Volver" name="Volver">
        <input type="submit" value="Modificar" name="Modificar">
    </form>
</body>
</html>