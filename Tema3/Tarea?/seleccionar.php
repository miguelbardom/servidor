<?php
    include("./funciones.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $errores = array();
        if (!ficheroVacio() && ficheroExiste() && crearErrores($errores)) {
            enviado();
        }
    ?>

    <form action="" method="post" name="seleccionar" enctype="multipart/form-data">
        <input type="text" name="fichero" id="fichero">
        <p class="error">
            <?php
                errores($errores,'fichero');
                errores($errores,'ficheroExiste');
            ?>
        </p>
        <input type="submit" value="Leer" name="Leer">
        <input type="submit" value="Escribir" name="Escribir">
    </form>
</body>
</html>