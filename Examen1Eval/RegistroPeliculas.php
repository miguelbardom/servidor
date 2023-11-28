<?php
    include("./validarFormulario.php");
    include("./funciones.php");
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
        if (enviado() && validaFormulario($errores)) {
            echo "<pre>";
            $pelicula = $_REQUEST;
            print_r($pelicula);

            escribirFichero($pelicula);

        } else {

    ?>

    <form action="" method="get" name="formulario_pelicula" enctype="multipart/form-data">
        <h3>Registro de Películas</h3>

        <label for="id">ID (Formato: 0000MM-000): 
            <input type="text" name="id" id="id" value="<?php recuerda('id');?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'idVacio');echo "<br>";
                errores($errores,'idVal');
            ?>
        </p>

        <label for="titulo">Título: 
            <input type="text" name="titulo" id="titulo" value="<?php recuerda('titulo');?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'tituloVacio');
            ?>
        </p>

        <label for="director">Director: 
            <input type="text" name="director" id="director" value="<?php recuerda('director');?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'directorVacio');
            ?>
        </p>

        <label for="anno">Año de Lanzamiento (AAAA): 
            <input type="text" name="anno" id="anno" value="<?php recuerda('anno');?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'annoVacio');echo "<br>";
                errores($errores,'annoVal');
            ?>
        </p>
        
        <label for="">Género: </label>
        <?php
            $generos = ['accion', 'comedia', 'drama', 'terror', 'ciencia_ficcion',
            'romance', 'animacion', 'documental', 'aventura'];
            for ($i=0; $i < count($generos); $i++) { 
                echo "<label for='opc.$i'><input ".recuerdaRadio('genero',$generos[$i])." type='radio' name='genero' id='opc.$i' value='$generos[$i]'>".$generos[$i]."</label>";
            }
        ?>
        <p class="error">
            <?php
                errores($errores,'generoVacio');
            ?>
        </p>

        <label for="actores">Actores Principales (separados por comas): 
            <input type="text" name="actores" id="actores" value="<?php recuerda('actores');?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'actoresVacio');echo "<br>";
                errores($errores,'actoresVal');
            ?>
        </p>

        <label for="duracion">Duración (hh:mm:ss): 
            <input type="text" name="duracion" id="duracion" value="<?php recuerda('duracion');?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'duracionVacio');echo "<br>";
                errores($errores,'duracionVal');
            ?>
        </p>

        <label for="">Sinopsis (mínimo 50 caracteres): 
            <textarea name="sinopsis" id="sinopsis" cols="30" rows="4" value="<?php recuerda('sinopsis');?>"></textarea>
        </label>
        <p class="error">
            <?php
                errores($errores,'sinopsisVacio');echo "<br>";
                errores($errores,'sinopsisVal');
            ?>
        </p>
        <input type="submit" value="Enviar" name="Enviar">

    </form>
    <?php
        }
    ?>
    
</body>
</html>