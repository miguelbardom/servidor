<?php

function enviado(){
    if (isset($_REQUEST['Enviar'])) {
        return true;
    }
    return false;
}