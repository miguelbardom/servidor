<?php

function pulsaCrearBD(){
    if (isset($_REQUEST['crear_bd'])) {
        return true;
    }
    return false;
}

function pulsaLeerTabla(){
    if (isset($_REQUEST['leer_tabla'])) {
        return true;
    }
    return false;
}

function pulsaInsertar(){
    if (isset($_REQUEST['insertar'])) {
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
    $exp = '/^.{1,25}$/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaLongitud($name){
    $exp = '/^\d+([.,]\d+)?$/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function recuerda($name){
    if(pulsaInsertar() && !empty($_REQUEST[$name])){
        echo $_REQUEST[$name];
    }
}

function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function validaFormulario(&$errores){
    if(textVacio('nombre')){
        $errores['nombreVacio'] = "Nombre vacío";
    } else {
        if(validaNombre('nombre')){
            $errores['nombreVal'] = "Formato incorrecto: debe ser una cadena de hasta 25 caracteres";
        }
    }
    if(textVacio('numero')){
        $errores['numeroVacio'] = "Número vacío";
    }
    if(textVacio('longitud')){
        $errores['longitudVacio'] = "Longitud vacía";
    } else {
        if(validaLongitud('longitud')){
            $errores['longitudVal'] = "Formato incorrecto: solo válidos números enteros o decimales";
        }
    }
    if(textVacio('fecha_medicion')){
        $errores['fechaVacio'] = "Fecha vacía";
    }

    if (count($errores)==0)
        return true;
    else
        return false;
}