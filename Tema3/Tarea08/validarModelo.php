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




function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function validaFormulario(&$errores){
    if(textVacio('alfab')){
        $errores['alfab'] = "Nombre vacío";
    }
    if(textVacio('alfanum')){
        $errores['alfanum'] = "Apellido vacío";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}