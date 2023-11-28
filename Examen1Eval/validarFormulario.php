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

function radioVacio($name){
    if (isset($_REQUEST[$name])) {
        return false;
    } else {
        return true;
    }
}

function validaID($name){
    $exp = "/^\d{4}[A-Z]{2}\-\d{3}$/";
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaAnno($name){
    $exp = '/^(\d{4})$/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaActores($name){
    $exp = '/^.(\,.)?/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaDuracion($name){
    $exp = '/^\d{2}:\d{2}:\d{2}$/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaSinopsis($name){
    $exp = '/^.{50,}$/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function recuerda($name){
    if(enviado() && !empty($_REQUEST[$name])){
        echo $_REQUEST[$name];
    }
}

function recuerdaRadio($name,$value){
    if(enviado() && isset($_REQUEST[$name]) && $_REQUEST[$name]==$value)
        echo 'checked';
}


function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function validaFormulario(&$errores){
    if(textVacio('id')){
        $errores['idVacio'] = "ID vacía";
    } else {
        if(validaID('id')){
            $errores['idVal'] = "Formato incorrecto";
        }
    }
    if (textVacio('titulo')) {
        $errores['tituloVacio'] = "Titulo vacío";
    }
    if (textVacio('director')) {
        $errores['directorVacio'] = "Director vacío";
    }
    if (textVacio('anno')) {
        $errores['annoVacio'] = "Año vacío";
    } else {
        if(validaAnno('anno')){
            $errores['annoVal'] = "Formato incorrecto";
        }
    }
    if (radioVacio('genero')) {
        $errores['generoVacio'] = "Debe seleccionar un género";
    }
    if (textVacio('actores')) {
        $errores['actoresVacio'] = "Actores vacío";
    } else {
        if(validaActores('actores')){
            $errores['actoresVal'] = "Formato incorrecto";
        }
    }
    if (textVacio('duracion')) {
        $errores['duracionVacio'] = "Duración vacía";
    } else {
        if(validaDuracion('duracion')){
            $errores['duracionVal'] = "Formato incorrecto";
        }
    }
    if (textVacio('sinopsis')) {
        $errores['sinopsisVacio'] = "Sinopsis vacía";
    } else {
        if(validaSinopsis('sinopsis')){
            $errores['sinopsisVal'] = "Formato incorrecto";
        }
    }


    if (count($errores)==0)
        return true;
    else
        return false;
}