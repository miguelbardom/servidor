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
        $ruta="";
        if(count($_FILES)!=0){
            $ruta = "/var/www/servidor/Tema3/Tarea09/";
            
            $ruta .= basename($_FILES['fichero']['name']);
            if(move_uploaded_file($_FILES['fichero']['tmp_name'],$ruta)){
                echo "Archivo subido: ";
            } else {
                echo "La subida ha fallado";
            }
        }
        echo $ruta;

        $errores = array();
        if (enviado() && validaFormulario($errores)) {
            echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>";
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
            echo "<img src='$ruta' alt=''>";

            echo 
            "
            <!DOCTYPE html>
            <html lang='es'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Resultado</title>
            </head>
            <body>
                <img src='$ruta' alt=''>
            </body>
            </html>
            ";
        } else {

    ?>


    <h2>Tarea 09 - Formulario y Expresiones Regulares</h2>
    <form action="" method="post" name="formulario expresiones" enctype="multipart/form-data">

        <label for="nombre">Nombre <input type="text" name="nombre" id="nombre" placeholder="Nombre"
         value="<?php recuerda('nombre'); ?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'nombre');echo "<br>";
                errores($errores,'valNombre');
            ?>
        </p>
        <br>
        <label for="apellidos">Apellidos <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"
         value="<?php recuerda('apellidos'); ?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'apellidos');echo "<br>";
                errores($errores,'valApellidos');
            ?>
        </p>
        <br>
        <label for="passwd">Contraseña <input type="password" name="passwd" id="passwd"></label>
        <p class="error">
            <?php
                errores($errores,'valPasswd');
            ?>
        </p>
        <br>
        <label for="rePasswd">Repetir contraseña <input type="password" name="rePasswd" id="rePasswd"></label>
        <p class="error">
            <?php
                errores($errores,'valRePasswd');
            ?>
        </p>
        <br>
        <label for="fecha">Fecha de nacimiento <input type="text" name="fecha" id="fecha" placeholder="dd/mm/AAAA"
         value="<?php recuerda('fecha'); ?>">
        </label>
        <p class="error">
            <?php
                errores($errores,'fechaVacio');
                if (!empty($_REQUEST['fecha'])) {
                    echo "<br>";
                    errores($errores,'valFecha');
                    echo "<br>";
                    errores($errores,'edad');
                }
            ?>
        </p>
        <br>
        <label for="dni">DNI <input type="text" name="dni" id="dni" value="<?php recuerda('dni'); ?>"></label>
        <p class="error">
            <?php
                errores($errores,'dni');
            ?>
        </p>
        <br>
        <label for="email">Correo electrónico <input type="text" name="email" id="email" value="<?php recuerda('email'); ?>"></label>
        <p class="error">
            <?php
                errores($errores,'email');
            ?>
        </p>
        <br>
        <input type="file" name="fichero" id="fichero">
        <p class="error">
            <?php
                errores($errores,'fichero');echo "<br>";
                errores($errores,'formato');
            ?>
        </p>
        <br>
        <input type="submit" value="Enviar" name="Enviar">
        <input type="submit" value="Borrar" name="Borrar">


    </form>
    <?php
        }
    ?>

</body>