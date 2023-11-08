<?php

function enviado(){
    if (isset($_REQUEST['Leer'])) {
        header('Location:./leer.php?fichero='.$_REQUEST['fichero']);
    } elseif (isset($_REQUEST['Escribir'])) {
        header('Location:./escribir.php?fichero='.$_REQUEST['fichero']);
    }
}

