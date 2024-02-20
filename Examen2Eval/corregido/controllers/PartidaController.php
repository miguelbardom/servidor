<?

//si no existe sesion palabra 
if (!isset($_SESSION['palabra'])) {
    $palabra = PalabraDAO::findAleatorio();
    $_SESSION['palabra'] = $palabra;
    $_SESSION['oculta'] = $oculta;
}
//guardo en la sesion la palabra correcta
//guardo en la sesion los intentos (6)
//guardo en la sesion la oculta

// en el caso de que si exista palabra 
//ha metido letra
//esta bien la letra

    //la letra esta en la palabra
        


