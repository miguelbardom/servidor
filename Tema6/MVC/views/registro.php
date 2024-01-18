
<form action="" method="post">

    <br>
    <label for="nombre">Código Usuario: <!--codUsuario-->
        <input type="text" name="nombre" id="nombre">
    </label>
    <p class="error">
        <?php
            if(isset($errores))
                errores($errores,'nombre');
        ?>
    </p>
    <br>
    <label for="nombre">Nombre: <!--descUsuario-->
        <input type="text" name="nombre" id="nombre">
    </label>
    <p class="error">
        <?php
            if(isset($errores))
                errores($errores,'nombre');
        ?>
    </p>
    <label for="pass">Contraseña: <!--//password-->
        <input type="password" name="pass" id="pass">
    </label>
    <p class="error">
        <?php
            if(isset($errores))
                errores($errores,'pass');
        ?>
    </p>
    <label for="pass">Repite contraseña:
        <input type="password" name="pass1" id="pass1">
    </label>
    <p class="error">
            <?php
                if(isset($errores))
                    errores($errores,'pass1');
            ?>
    </p>
    <p class="error">
            <?php
                if(isset($errores))
                    errores($errores,'igual');
                    errores($errores,'registrar');
            ?>
    </p>
    <br>

    <input type="submit" value="Registro" name="Login_GuardaRegistro">
</form>