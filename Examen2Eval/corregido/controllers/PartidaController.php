<?

$arrayPalabra = [];

//si no existe sesion palabra 
if (!isset($_SESSION['palabra'])) {
    $palabra = PalabraDAO::findAleatorio();
    //guardo en la sesion la palabra correcta
    $_SESSION['palabra'] = $palabra; // $palabra[0]['palabra']

    //ocultar palabra
    $oculta = [];
    $arrayPalabra = str_split($palabra[0]['palabra']);
    foreach ($arrayPalabra as $l) {
        array_push($oculta, '*');
    }

    //guardo en la sesion la palabra oculta
    $_SESSION['oculta'] = $oculta;
}
//guardo en la sesion los intentos (6)

// en el caso de que si exista palabra 
elseif (isset($_SESSION['palabra'])) {
    if(isset($_REQUEST['Prueba_Letra'])){
        $letra = $_REQUEST['letra'];
        $arrayPalabra = str_split($_SESSION['palabra'][0]['palabra']);
        // print_r ($arrayPalabra);
        $oculta = $_SESSION['oculta'];
        // print_r($oculta);
        foreach ($arrayPalabra as $key => $l) {
            if ($l === $letra) {
                // echo "igual";
                $oculta[$key] = $l;
                $_SESSION['oculta'] = $oculta;
            } else {
                // echo "distinto";
            }
        }
    }
}
//ha metido letra
//esta bien la letra

    //la letra esta en la palabra
        


if (isset($_REQUEST['Home_Partida'])){
    $_SESSION['vista'] = VIEW.'homePartida.php';
    $_SESSION['controlador'] = CON.'HomeController.php';
    require $_SESSION['controlador'];
}