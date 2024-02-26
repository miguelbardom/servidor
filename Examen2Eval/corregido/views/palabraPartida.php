
<br>
<h3>
    Bienvenido al Juego del Ahorcado!
</h3>
<form action="" method="post">
    <input type="submit" value="Home" name="Home_Partida">
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
            echo implode('', $_SESSION['oculta']);
        ?>
    </label>
    <br>
    <input type="text" name="letra" id="letra">
    <input type="submit" value="Prueba Letra" name="Prueba_Letra">
        <?
            // if(isset($_REQUEST['Prueba_Letra'])){
            //     print_r($_REQUEST['letra']);
            // }
        ?>
</form>