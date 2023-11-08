<?php

    include("./validarFormulario.php");
    // include("./funcionesBD.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>

    <?php

        $errores = array();
        //si ha ido todo bien
        if (pulsaInsertar() && validaFormulario($errores)) {
            echo "<pre>";
            print_r($_REQUEST);

        }

    ?>

    <h2 style="text-align: center">Acceso a una base de datos</h2>
    <form action="" method="get">
        <h4>Crear base de datos (si no existe)</h4>
        <button type="submit" value="crear_bd" name="crear_bd">Crear BD</button>
        <p class="error"></p>
        <br>
        <h4>Leer tabla de la base de datos</h4>
        <button type="submit" value="leer_tabla" name="leer_tabla">Leer tabla</button>
        <p class="error"></p>
        <br>
        <h4>Insertar un registro en la tabla</h4>

        <label for="nombre">Nombre del río: 
            <input type="text" name="nombre" id="nombre" value="<?php recuerda('nombre');?>"></label>
        <p class="error">
            <?php
                errores($errores,'nombreVacio');
                errores($errores,'nombreVal');
            ?>
        </p>

        <label for="numero">Número de afluentes: 
            <input type="number" name="numero" id="numero" value="<?php recuerda('numero');?>"></label>
        <p class="error">
            <?php
                errores($errores,'numeroVacio');
            ?>
        </p>

        <label for="longitud">Longitud (en km): 
            <input type="text" name="longitud" id="longitud" value="<?php recuerda('longitud');?>"></label>
        <p class="error">
            <?php
                errores($errores,'longitudVacio');
            ?>
        </p>

        <label for="fecha_medicion">Última medición realizada: 
            <input type="date" name="fecha_medicion" id="fecha_medicion" value="<?php recuerda('fecha_medicion');?>"></label>
        <p class="error">
            <?php
                errores($errores,'fechaVacio');
            ?>
        </p>

        <button type="submit" value="insertar" name="insertar">Insertar</button>
    </form>

</body>
</html>