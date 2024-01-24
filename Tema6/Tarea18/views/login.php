<?
    if(isset($sms)){
        echo $sms;
    }
?>

<form action="" method="post">
    <br>
    <label for="nombre">Nombre:
        <input type="text" name="nombre" id="nombre">
    </label>
    <p class="error">
            <?php
                if(isset($errores))
                    errores($errores,'nombre');
            ?>
    </p>
    <label for="pass">Contraseña:
        <input type="password" name="pass" id="pass">
    </label>
    <p class="error">
            <?php
                if(isset($errores))
                    errores($errores,'pass');
            ?>
    </p>
    <p class="error">
            <?php
                if(isset($errores))
                    errores($errores,'validado');
            ?>
    </p>
    <input type="submit" value="Iniciar Sesión" name="Login_IniciarSesion">
    <input type="submit" value="Registro" name="Login_Registro">
    <br><br>
</form>