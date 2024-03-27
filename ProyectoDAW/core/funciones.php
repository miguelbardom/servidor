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

function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function validado(){
    if(isset($_SESSION['usuario']))
        return true;
}
