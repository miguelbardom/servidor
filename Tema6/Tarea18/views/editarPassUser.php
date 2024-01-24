
<form action="" method="post">
    <br>
    <label for="pass">Contraseña:
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
            ?>
    </p>
    <br>
    <input type="submit" value="User_GuardaContraseña" name="Guardar Cambios">
    <br><br>
</form>