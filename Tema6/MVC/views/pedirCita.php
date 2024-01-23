
<h1>Pedir Cita</h1>
<form action="" method="post">

    <br>
    <label for="especialista">Especialista: <!--descUsuario-->
        <input type="text" name="especialista" id="especialista">
    </label>
    <p class="error">
        <?php
            if(isset($errores))
                errores($errores,'especialista');
        ?>
    </p>
    <label for="fecha">Fecha: <!--//password-->
        <input type="date" name="fecha" id="fecha">
    </label>
    <p class="error">
        <?php
            if(isset($errores))
                errores($errores,'fecha');
        ?>
    </p>
    <label for="motivo">Motivo:
        <textarea name="motivo" id="motivo"></textarea>
    </label>
    <p class="error">
            <?php
                if(isset($errores))
                    errores($errores,'motivo');
            ?>
    </p>
    <p class="error">
            <?php
                if(isset($errores))
                    errores($errores,'insertar');
            ?>
    </p>
    <br>

    <input type="submit" value="Solicitar" name="Cita_GuardaCita">
</form>