<?php


$dom = new DOMDocument("1.0", "UTF-8");

$raiz = $dom->appendChild($dom->createElement("instrumentos"));
$instrumento = $dom->createElement("instrumento");
$nombre = $dom->createElement("nombre", "guitarra");
$familia = $dom->createElement("familia", "cuerda");
$raiz->appendChild($instrumento);
$instrumento->appendChild($nombre);
$instrumento->appendChild($familia);
$instrumento->setAttribute("id", "1");


$intrumento = $raiz->appendChild($dom->createElement("instrumento"));
$intrumento->appendChild($dom->createElement("nombre", "violin"));
$intrumento->appendChild($dom->createElement("familia", "cuerda"));
$instrumento->setAttribute("id", "2");

$dom->formatOutput = true;
$dom->save('instrumentos.xml');

//leer
$dom->load('instrumentos.xml');
echo "<pre>";
print_r($dom);
foreach ($dom->childNodes as $instrumentos) {
    foreach ($instrumentos->childNodes as $instrumento) {
        if ($instrumento->nodeType == 1) {
            echo "\n".$instrumento->getAttribute('id');
            $nodo = $instrumento->firstChild;
            do{
                if ($nodo->nodeType == 1) {
                    echo "\n".$nodo->tagName.":".$nodo->nodeValue;
                }
            } while ($nodo = $nodo->nextSibling);

            //domelement
            //echo "\nNombre: " . $instrumento->firstChild->nodeValue;
            //domtext
            //echo "\nNombre: " . $instrumento->firstChild->firstChild->data;
        }
    }
}

$instrumentoLista = $dom->getElementsByTagName('instrumento');
foreach ($instrumentoLista as $value) {
    $a = $value->getElementsByTagName('nombre');
    echo "\n".$a->item(0)->tagName .":".$a->item(0)->nodeValue;
    $a = $value->getElementsByTagName('familia');
    echo "\n".$a->item(0)->tagName .":".$a->item(0)->nodeValue;
}

//descargar archivo
header('Content-Type: txt/xml');
header("Content-Disposition: attachment; filename=instrumentos.xml");


//Para que no cuente los espacios en blanco
// $dom = new DOMDocument('1.0');
// $dom->load('instrumentos.xml',LIBXML_NOBLANKS);
// $dom->formatOutput = false;
// $dom->save('a.xml');