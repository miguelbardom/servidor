
<form action="" method="post">
    <br>
    <label for="nombre">codUsuario:
        <input type="text" readonly name="cod" id="cod" value="<?echo $_SESSION['usuario']->codUsuario;?>">
    </label>
    <br>
    <label for="nombre">descUsuario:
        <input type="text" name="nombre" id="nombre" value="<?echo $_SESSION['usuario']->descUsuario; ?>">
    </label>
    <p class="error">
            <?php
                if(isset($errores))
                    errores($errores,'nombre');
            ?>
    </p>
    <br>
    <label for="fecha">Fecha Ultima Conexion:
        <input type="text" readonly name="fecha" id="fecha" value="<?echo $_SESSION['usuario']->fechaUltimaConexion; ?>">
    </label>
    <br>
    <label for="perfil">Perfil:
        <input type="text" readonly name="perfil" id="perfil" value="<?echo $_SESSION['usuario']->perfil; ?>">
    </label>
    <br>
    <input type="submit" value="User_Editar" name="Guardar Cambios">
    <input type="submit" value="User_CambiaContraseña" name="Cambiar Contraseña">
    <br><br>
</form>