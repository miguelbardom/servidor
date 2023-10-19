<?php
    include("./validaciones.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $errores = array();
        if (enviado()) {
            if(textVacio('nombre')){
                $errores['nombre'] = "Nombre vacío";
            }
            if (textVacio('apellido')) {
                $errores['apellido'] = "Apellido vacío";
            }
        }


    ?>

    <form action="" method="post" name="formulario1" enctype="multipart/form-data">
        <label for="nombre">Nombre: <input type="text" name="nombre" id="nombre" placeholder="Nombre"
            value="<?php recuerda('nombre'); ?>" ></label>
        <p class="error">
            <?php
                errores($errores,'nombre');
            ?>
        </p>
        <label for="apellido">Apellido: <input type="text" name="apellido" id="apellido" placeholder="Apellido"
            value="<?php recuerda('apellido'); ?>" ></label>
        <p class="error">
            <?php
                errores($errores,'apellido');
            ?>
        </p>
        <br>
        <label for="hombre">Hombre: <input type="radio" name="genero" id="hombre" value="hombre"></label>
        <label for="mujer">Mujer: <input type="radio" name="genero" id="mujer" value="mujer"></label>
        <br>
        <ul>
            <li>Aficiones: </li>
        </ul>
        <label for="ch1">Montar a caballo<input type="checkbox" name="aficion[]" id="ch1" value="jinete"></label>
        <label for="ch2">Jugar al fútbol<input type="checkbox" name="aficion[]" id="ch2" value="futbolista"></label>
        <label for="ch3">Natación<input type="checkbox" name="aficion[]" id="ch3" value="nadador"></label>
        <br><br>
        <label for="fecha_n">Fecha de nacimiento: <input type="date" name="fecha_n" id="fecha_n"></label>
        <br>
        <ul>
            <li>Equipos Baloncesto</li>
        </ul>
        <select name="equipos" id="">
            <option value="0">Seleccione una opción</option>
            <option value="lakers">Lakers</option>
            <option value="celtics">Celtics</option>
            <option value="bulls">Bulls</option>
        </select>
        <br><br>
        <input type="file" name="fichero" id="fichero">
        <br>
        <input type="hidden" name="usuarioVIP" value="156">
        <br><br>
        <input type="submit" value="Enviar" name="Enviar">
        <input type="reset" value="Borrar" name="Borrar">
    </form>
</body>
</html>