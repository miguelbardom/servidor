<?

//si no existe sesion palabra 
if (!isset($_SESSION['palabra'])) {
    $palabra = PalabraDAO::findAleatorio();
    $_SESSION['palabra'] = $palabra;
    function ocultarPalabra($palabra){
        $oculta = [];
        $arrayPalabra = str_split($palabra[0]['palabra']);
        foreach ($arrayPalabra as $letra) {
            array_push($oculta, '*');
        }
        return $oculta;
    }
    $_SESSION['oculta'] = ocultarPalabra($palabra);
}
//guardo en la sesion la palabra correcta
//guardo en la sesion los intentos (6)
//guardo en la sesion la oculta

// en el caso de que si exista palabra 
//ha metido letra
//esta bien la letra

    //la letra esta en la palabra
        


