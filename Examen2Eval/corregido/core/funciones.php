<?php

function validaFormulario(&$errores){
    if(textVacio('nombre')){
        $errores['nombre'] = "Nombre vacío";
    }
    if (textVacio('pass')) {
        $errores['pass'] = "Contraseña vacía";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}

function textVacio($name){
    if (empty($_REQUEST[$name])) {
        return true;
    } else {
        return false;
    }
}

function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function validado(){
    if(isset($_SESSION['usuario']))
        return true;
}
/*
function passIgual($pass,$pass1,&$errores){
    if($pass !== $pass1){
        $errores['igual'] = "Las contraseñas no coinciden";
        return false;
    }
    return true;
}
*/
function isAdmin(){
    if($_SESSION['usuario']->perfil == 'administrador')
        return true;
    return false;
}

function ocultarPalabra($palabra){
    $oculta = [];
    $arrayPalabra = str_split($palabra[0]['palabra']);
    foreach ($arrayPalabra as $l) {
        array_push($oculta, '*');
    }
    return $oculta;
}

function compararLetras(){
    $letra = $_REQUEST['letra'];
    $arrayPalabra = str_split($_SESSION['palabra'][0]['palabra']);
    // print_r ($arrayPalabra);
    $oculta = $_SESSION['oculta'];
    // print_r($oculta);
    $letraEncontrada = false;
    foreach ($arrayPalabra as $key => $l) {
        if ($l === $letra) {
            // echo "igual";
            $oculta[$key] = $l;
            $_SESSION['oculta'] = $oculta;
            $_SESSION['resultado'] = '';
            $letraEncontrada = true;
        } else {
            // echo "distinta";
        }
    }
    return $letraEncontrada;
}

function controlarIntentos($letraEncontrada){
    if (!$letraEncontrada) {
        if ($_SESSION['intentos'] > 0) {
            $_SESSION['intentos']--;
            $_SESSION['resultado'] = '';
        } elseif ($_SESSION['intentos'] == 0) {
            $derrota = 'PERDISTE! Has superado el número de intentos';
            $_SESSION['resultado'] = $derrota;
        }
    } elseif ($letraEncontrada) {
        if (!in_array('*', $_SESSION['oculta'])) {
            $_SESSION['resultado'] = 'ENHORABUENA, ACERTASTE!';
        }
    }
}