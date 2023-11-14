<?php

//Leer un fichero xml sabiendo el nombre de las etiquetas que tenemos que recorrer
if (file_exists('ficheroXML.xml')) {
    $xml = simplexml_load_file('ficheroXML.xml');
    echo "<pre>";
    //print_r($xml);
    foreach ($xml as $elemento) {
        //print_r($elemento);
        echo "\nEl coche ".$elemento['id'];
        echo "\nLa marca es: ".$elemento->marca;
        echo " y modelo: ".$elemento->modelo;
    }
} else {
    exit('Error abriendo ficheroXML.xml.');
}

//Podemos no saber el nombre de las etiquetas
if (file_exists('ficheroXML.xml')) {
    $xml = simplexml_load_file('ficheroXML.xml');
    echo "<pre>";
    //print_r($xml);
    foreach ($xml as $elemento) {
        leerElemento($elemento);
    }
} else {
    exit('Error abriendo ficheroXML.xml.');
}

function leerElemento($elemento){
    foreach($elemento->children() as $a) {
        echo $a;
    }
    // echo $elemento->children()[0];
    // echo $elemento->children()[1];
    // echo $elemento->children()->count();
}

echo "<br>";
echo "<br>";

//Para XML Simple XML
$xml = new SimpleXMLElement('<juegos></juegos>');
// print_r($xml);

$juego1 = $xml->addChild('juego');
$juego1->addAttribute('id','1');
$juego1->addAttribute('disponible','si');
$juego1->addChild('nombre','FIFA');
$dispositivos = $juego1->addChild('dispositivos');
$dispositivos->addChild('dispositivo','XBOX');
$dispositivos->addChild('dispositivo','PlayStation');

$juego2 = $xml->addChild('juego');
$juego2->addChild('nombre','GTA');
$juego2->addAttribute('id','2');
$juego2->addAttribute('disponible','si');
$dispositivos = $juego2->addChild('dispositivos');
$dispositivos->addChild('dispositivo','XBOX');
$dispositivos->addChild('dispositivo','PlayStation');

$juego2 = $xml->addChild('juego');
$juego2->addChild('nombre','Tetris');
$juego2->addAttribute('id','3');
$juego2->addAttribute('disponible','no');
$dispositivos = $juego2->addChild('dispositivos');
$dispositivos->addChild('dispositivo','XBOX');
$dispositivos->addChild('dispositivo','PlayStation');

//guarda el xml en un fichero
//si ya existe lo sobreescribe
$xml->asXML('juegos.xml');