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
        //si ha ido todo bien
        if (enviado() && validaFormulario($errores)) {
            echo "<pre>";
            print_r($_REQUEST);
        } else {

    ?>
    <!-- Enviar datos del usuario/cliente al servidor
        action => donde se quieren enviar los datos
                si no se le da fichero, llama a la pagina actual
        method => como se envian (GET en la url / POST oculto en la cabecera)
        name => para php no es obligatorio, para javascript es conveniente
        enctype => para poder enviar ficheros
    -->
    <form action="" method="get" name="formulario1" enctype="multipart/form-data">
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
        <!-- si queremos que solo se puede elegir uno, hay que pone el mismo name
            value => determinar que queremos que se mande
        -->
        <label for="hombre">Hombre: <input
        <?php
            recuerdaRadio('genero','hombre');
        ?> type="radio" name="genero" id="hombre" value="hombre"></label>
        <label for="mujer">Mujer: <input <?php
            recuerdaRadio('genero','mujer');
        ?> type="radio" name="genero" id="mujer" value="mujer"></label>
        <br>
        <p class="error">
            <?php
                errores($errores,'genero');
            ?>
        </p>
        <!--
            Enviar mas de una del grupo se envian en el name, el nombre con []
            Valor que queremos que se envie => value
        -->
        <ul>
            <li>Aficiones (al menos una): </li>
        </ul>
        <label for="ch1">Montar a caballo<input  
        <?php
            recuerdaCheck('aficion','jinete');
        ?>
        type="checkbox" name="aficion[]" id="ch1" value="jinete"></label>
        <label for="ch2">Jugar al fútbol<input 
        <?php
            recuerdaCheck('aficion','futbolista');
        ?>
        type="checkbox" name="aficion[]" id="ch2" value="futbolista"></label>
        <label for="ch3">Natación<input 
        <?php
            recuerdaCheck('aficion','nadador');
        ?>
        type="checkbox" name="aficion[]" id="ch3" value="nadador"></label>
        <br>
        <p class="error">
            <?php
                errores($errores,'aficion');
            ?>
        </p>
        <!--
            Formato de la fecha: AAAA-mm-dd
        -->
        <label for="fecha_n">Fecha de nacimiento: <input value="<?php recuerda('fecha_n'); ?>" type="date" name="fecha_n" id="fecha_n"></label>
        <br>
        <p class="error">
            <?php
                errores($errores,'fecha_n');
            ?>
        </p>
        <!--
            Valor que queremos que envie => value
        -->
        <ul>
            <li>Equipos Baloncesto</li>
        </ul>
        <select name="equipos" id="">
            <option value="0">Seleccione una opción</option>
            <option value="lakers" <?php recuerdaSelect('equipos','lakers'); ?> >Lakers</option>
            <option value="celtics" <?php recuerdaSelect('equipos','celtics'); ?> >Celtics</option>
            <option value="bulls" <?php recuerdaSelect('equipos','bulls'); ?> >Bulls</option>
        </select>
        <br>
        <p class="error">
            <?php
                errores($errores,'equipos');
            ?>
        </p>
        <!-- Fichero, los recibe el servidor en $_FILES -->
        <input type="file" name="fichero" id="fichero">
        <br>
        <p class="error">
            <?php
                errores($errores,'fichero');
            ?>
        </p>
        <!-- El usuario no lo ve en el navegador, pero podemos enviar informacion y que el usuario no lo vea -->
        <input type="hidden" name="usuarioVIP" value="156">
        <br><br>
        <!-- el name sirve para verificar que se ha enviado/borrado (con una funcion que hemos hecho en la que usamos este name) -->
        <input type="submit" value="Enviar" name="Enviar">
        <input type="submit" value="Borrar" name="Borrar">
    </form>
    <?php
        }
        ?>

</body>
</html>