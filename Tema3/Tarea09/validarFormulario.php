<?php

function enviado(){
    if (isset($_REQUEST['Enviar'])) {
        return true;
    }
    return false;
}

function textVacio($name){
    if (empty($_REQUEST[$name])) {
        return true;
    } else {
        return false;
    }
}

function validaNombre($name){
    $exp = "/^[a-zA-Z]{3}$/";
    if(preg_match($exp,$_REQUEST[$name])){
        return true;
    } else {
        return false;
    };
}

function validaApe($name){
    $exp = "/^[a-zA-Z]{3}\s[a-zA-Z]{3}$/";
    if(preg_match($exp,$_REQUEST[$name])){
        return true;
    } else {
        return false;
    };
}






function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function validaFormulario(&$errores){
    if(textVacio('nombre')){
        $errores['nombre'] = "Nombre vacío";
    }
    if(textVacio('apellidos')){
        $errores['apellidos'] = "Apellidos vacíos";
    }
    // if(textVacio('passwd')){
    //     $errores['passwd'] = "Debe introducir una contraseña";
    // }
    if(textVacio('fichero')){
        $errores['fichero'] = "Fichero vacío";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}

function erroresExp($erroresExp,$name){
    if(isset ($erroresExp[$name]))
        echo $erroresExp[$name];
}

function validaExp(&$erroresExp){
    if(validaNombre('nombre')){
        $erroresExp['nombre'] = "Mínimo 3 caracteres";
    }
    if(validaApe('apellidos')){
        $erroresExp['apellidos'] = "Mínimo 3 caracteres para el primer apellido, un
        espacio y mínimo 3 caracteres el segundo";
    }
    if (count($erroresExp)==0)
        return true;
    else
        return false;
}