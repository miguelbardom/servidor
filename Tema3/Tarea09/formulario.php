<?php
    include("./validarFormulario.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario y Expresiones Regulares</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <?php

        $errores = array();
        $erroresExp = array();
        if (enviado() && validaFormulario($errores) && validaExp($erroresExp)) {
            echo "<pre>";
            print_r($_REQUEST);
        }

    ?>


    <h2>Tarea 09 - Formulario y Expresiones Regulares</h2>
    <form action="" method="post" name="formulario expresiones" enctype="multipart/form-data">

        <label for="nombre">Nombre <input type="text" name="nombre" id="nombre" placeholder="Nombre"></label>
        <p class="error">
            <?php
                errores($errores,'nombre');
            ?>
        </p>
        <p class="error">
            <?php
                erroresExp($erroresExp,'nombre');
            ?>
        </p>
        <br>
        <label for="apellidos">Apellidos <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"></label>
        <p class="error">
            <?php
                errores($errores,'apellidos');
            ?>
        </p>
        <br>
        <label for="passwd">Contraseña <input type="password" name="passwd" id="passwd"></label>
        <br>
        <label for="rPasswd">Repetir contraseña <input type="password" name="rPasswd" id="rPasswd"></label>
        <br>
        <label for="fecha">Fecha de nacimiento <input type="text" name="fecha" id="fecha"></label>
        <br>
        <label for="dni">DNI <input type="text" name="dni" id="dni"></label>
        <br>
        <label for="email">Correo electrónico <input type="text" name="email" id="email"></label>
        <br>
        <input type="file" name="fichero" id="fichero">
        <p class="error">
            <?php
                errores($errores,'fichero');
            ?>
        </p>
        <br>
        <label for="Enviar"><input type="submit" value="Enviar" name="Enviar"></label>


    </form>

</body>