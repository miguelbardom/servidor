<?php

function enviado(){
    if (isset($_REQUEST['Leer'])) {
        header('Location:./leer.php?fichero='.$_REQUEST['fichero']);
    } elseif (isset($_REQUEST['Escribir'])) {
        header('Location:./escribir.php'.$_REQUEST['fichero']);
    }
}

function ficheroVacio(){
    if (empty($_REQUEST['fichero'])) {
        return true;
    } else {
        return false;
    }
}

function ficheroExiste(){
    if(file_exists($_REQUEST['fichero'])){
        return true;
    } else {
        
        return false;
    }
}

function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function crearErrores(&$errores){
    if(ficheroVacio()){
        $errores['fichero'] = "Texto vacío";
    }
    if(!ficheroExiste()){
        $errores['ficheroExiste'] = "No existe el fichero";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}

function leerFichero(){
    if(!$fp = fopen($_REQUEST['fichero'],'r'))
        return false;
    else{
        $leido = fread($fp,filesize($_REQUEST['fichero']));
        echo $leido;
        fclose($fp);
    }
}