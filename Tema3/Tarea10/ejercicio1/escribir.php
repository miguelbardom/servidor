<?php
    include("./funciones.php");

if (isset($_REQUEST['fichero'])) {
    $file = $_REQUEST['fichero'];
    if (isset($_POST['guardar'])) {
        //comprobamos si el usuario ha agregado contenido al fichero
        if (isset($_POST['contenido'])) {
            //guardamos el contenido en una variable
            $contenido = $_POST['contenido'];
            //comprobamos si el fichero se ha podido modificar correctamente
            if (file_put_contents($file, $contenido) !== false) {
                echo 'Contenido guardado exitosamente.';
            } else {
                echo 'Error al guardar el contenido en el archivo.';
            }
        } else {
            echo 'Error: No se proporcionó contenido para guardar.';
        }
    }
    //Si el ususario pulsa volver, volvemos al fichero seleccionar.php
    if(isset($_POST['volver'])){
        header('Location: seleccionar.php?fichero=' . $_POST['file']);
        exit();
    }
} else {
    echo "Error: No se proporcionó el nombre del archivo.";
}

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