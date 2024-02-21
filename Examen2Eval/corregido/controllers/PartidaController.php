<?

$arrayPalabra = [];

//si no existe sesion palabra 
if (!isset($_SESSION['palabra'])) {
    $palabra = PalabraDAO::findAleatorio();
    //guardo en la sesion la palabra correcta
    $_SESSION['palabra'] = $palabra; // $palabra[0]['palabra']

    //guardo en la sesion la palabra oculta
    $_SESSION['oculta'] = ocultarPalabra($palabra);

    //guardo en la sesion los intentos (6)
    $_SESSION['intentos'] = 6;
}
// en el caso de que si exista palabra 
elseif (isset($_SESSION['palabra'])) {
    if(isset($_REQUEST['Prueba_Letra'])){
        compararLetras();
        controlarIntentos(compararLetras());
    }
}

if (isset($_REQUEST['Home_Partida'])){
    $_SESSION['vista'] = VIEW.'homePartida.php';
    $_SESSION['controlador'] = CON.'HomeController.php';
    require $_SESSION['controlador'];
}