

<h4>
    Bienvenido al Juego del Ahorcado!
</h4>
<form action="" method="post">
    <input type="submit" value="Cerrar Sesión" name="Login_CerrarSesion">
</form>
<br>

<form action="" method="post">
    <label for="">Palabra: </label>
    <label name="palabra" id="palabra">
        <?
            print_r($_SESSION['palabra'][0]['palabra']);
        ?>
    </label>
    <br>
    <label for="">Oculta: </label>
    <label name="oculta" id="oculta">
        <?

        ?>
    </label>
    <br>
    <input type="text" name="letra" id="letra">
    <input type="submit" value="Prueba Letra" name="Prueba_Letra">
</form>