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

function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function recuerda($name){
    if(enviado() && !empty($_REQUEST[$name])){
        echo $_REQUEST[$name];
    }
    if (isset($_REQUEST['Borrar'])) {
        echo '';
    }
}

function recuerdaRadio($name,$value){
    if(enviado() && isset($_REQUEST[$name]) && $_REQUEST[$name]==$value)
        echo 'checked';
    else if (isset($_REQUEST['Borrar']))
        echo '';
}

function recuerdaCheck($name,$value){
    if(enviado() && isset($_REQUEST[$name]) && in_array($value,$_REQUEST[$name]))
        echo 'checked';
    else if (isset($_REQUEST['Borrar']))
        echo '';
}

function selectVacio($name){
    if (isset($_REQUEST[$name]) && $_REQUEST[$name]!=0)
        return false;
    return true;
}
function recuerdaSelect($name,$value){
    if(enviado() && isset($_REQUEST[$name]) && $_REQUEST[$name]==$value)
        echo 'selected';
    else if (isset($_REQUEST['Borrar']))
        echo '';
}

function validaFormulario(&$errores){
    if(textVacio('nombre')){
        $errores['nombre'] = "Nombre vacío";
    }
    if (textVacio('apellido')) {
        $errores['apellido'] = "Apellido vacío";
    }
    if (radioVacio('genero')) {
        $errores['genero'] = "Debe seleccionar un género";
    }
    if (radioVacio('aficion')) {
        $errores['aficion'] = "Debe seleccionar al menos una afición";
    }
    if (textVacio('fecha_n')) {
        $errores['fecha_n'] = "Fecha de nacimiento vacía";
    }
    if (selectVacio('equipos')) {
        $errores['equipos'] = "Debe seleccionar un equipo";
    }
    if(textVacio('fichero')){
        $errores['fichero'] = "Fichero vacío";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}