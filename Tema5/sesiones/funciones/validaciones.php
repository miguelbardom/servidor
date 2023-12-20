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

function sesionIniciada(){
    if(!isset($_SESSION['usuario'])){
        $_SESSION['error'] = 'No tiene sesión iniciada';
        header('Location: ./login.php');
        exit;
    }
}

function permisosPagina($url){
    if(!in_array($url,$_SESSION['usuario']['paginas'])){

        $_SESSION['error'] = 'No tiene permiso para ir a la página ' .$url;
        header('Location: ./homeUser.php');
        exit;
        
    }
}