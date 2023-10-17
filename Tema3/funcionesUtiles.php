<?php
//nombre = edad
// opt arguments = año mes dia
// valor
// opt return annos
function edad($anno,$mes,$dia){
    $edad = mktime(0,0,0,$mes,$dia,$anno);
    $fecha1 = new DateTime($anno."-".$mes."-".$dia);
    $fecha2 = new DateTime();
    $annos = ($fecha1->diff($fecha2))->y;
    return $annos;
}

function iva($precio, $ivaP=0.21){
    return $precio * $ivaP;
}

function añadirAlArray($array,$value){
    $ultimo = count($array);
    $array[$ultimo] = $value;
}