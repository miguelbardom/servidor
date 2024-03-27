<?php

function validaLogin(&$errores){
    if(textVacio('user')){
        $errores['user'] = "Usuario vacío";
    }
    if (textVacio('pass')) {
        $errores['pass'] = "Contraseña vacía";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}

function validaRegistro(&$errores){
    if(textVacio('nombre')){
        $errores['nombre'] = "Nombre vacío";
    }
    if(textVacio('apellidos')){
        $errores['apellidos'] = "Apellidos vacío";
    }
    if(textVacio('user')){
        $errores['user'] = "Usuario vacío";
    }
    if (textVacio('pass')) {
        $errores['pass'] = "Contraseña vacía";
    } else {
        // if(validaPass('pass')){
        //     $errores['valPass'] = "Formato incorrecto";
        // }
    }
    if(textVacio('passRep')){
        $errores['passRep'] = "Repite la contraseña introducida";
    } else {
        if(validaPassRep('passRep')){
            $errores['passRepVal'] = "No coincide con la contraseña que has introducido anteriormente";
        }
    }
    if (textVacio('email')) {
        $errores['email'] = "Email vacío";
    }
    if (textVacio('fecha_nacimiento')) {
        $errores['fecha_nacimiento'] = "Fecha de nacimiento vacía";
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

function validaPass($name){
    $exp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+$/";
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaPassRep($name){
    if($_REQUEST[$name]===$_REQUEST['pass']){
        return false;
    } else {
        return true;
    }
}

function enviado($name){
    if (isset($_REQUEST[$name])) {
        return true;
    }
    return false;
}

function recuerda($name, $submit){
    if(enviado($submit) && !empty($_REQUEST[$name])){
        echo $_REQUEST[$name];
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


function validaEmail($name){
    $exp = "/^.+@.+\..{2,}$/";
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaFecha($name){
    $exp = '/(\d{1,2})(\/)(\d{1,2})(\/)(\d{2,4})/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}