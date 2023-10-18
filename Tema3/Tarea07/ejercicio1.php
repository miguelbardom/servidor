<?php

function br(){
    echo "<br>";
}

function h1($cadena){
    echo "<h1>".$cadena."</h1>";
}

function p($cadena){
    echo "<p>".$cadena."</p>";
}

function self(){
    echo "$_SERVER[SCRIPT_NAME]";
}

function letraDNI($dni){
    $arrayLetras = array("T","R","W","A","G","M","Y","F","P","D","X","B","N",
    "J","Z","S","Q","V","H","L","C","K");
    $dni_length = strlen((string)$dni);
    if ($dni_length == 8) {
        if (is_numeric($dni)) {
            $letra = $dni%23;

            return $arrayLetras[$letra];
            
        } else {
            echo "DNI incorrecto, solo puede contener dígitos";
        }
    } else {
        echo "DNI incorrecto, tiene que contener 8 dígitos";
    }
}