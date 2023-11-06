<?php


$exp = '/maria/';
echo preg_match($exp,'maria es mi profe favorita');

echo '<br>Uso del comodín . /mari.';
$exp = '/mari./';
echo preg_match($exp,'maria es mi profe favorita');
echo preg_match($exp,'mario es mi profe favorita');

echo '<br>Uso de o /maria o /mario';
$exp = '/mari[a]/';
echo preg_match($exp,'maria es mi profe favorita');
echo preg_match($exp,'mario es mi profe favorita');

echo '<br>Uso de o espacio[letra]espacio';
$exp = '/\s[A-Za-z]\s/';
$frase = 'Hoy es Halloween y salimos';
echo $frase;
echo "<pre>";
$array = array();
 preg_match_all($exp,$frase,$array);
print_r($array);

echo '<br>Numerico \d';
$frase = 'Hoy es 31 de octubre Halloween y salimos';
$exp = '/[0-9]/';
$exp = '\[/d*/]/';

echo '<br>Código IBAN';
$codigo = 'ES66 0019 0020 96 1234567890';
$exp = "/^[A-Z]{2}\d{2}\s\d{4}\s\d{4}\s\d{2}\s\d{10}$/";
preg_match($exp,$codigo);

echo '<br>Uso de no contiene ^';
$exp = '/mari[^ao]/';
echo preg_match($exp,'maria es mi profe favorita');
echo preg_match($exp,'maril es mi profe favorita');

echo "<br>";
echo "Expresion regular que permita introducir solo nov, noviembre o november";
$frase = "noviembre";
$exp = "/^nov(iembre|ember)?$/";
echo preg_match($exp,$frase);

echo '<br>Busca en un array';
$array = ['Lunes','Martes','Sabado'];
$exp = '/es$/';
print_r(preg_grep($exp,$array));

$array = [1,'a','B',4];
$patron = ['/^\d$/'];
$cambio = 'numero';
print_r(preg_replace($patron,$cambio,$array));

$array = [1,'a','B',4];
$patron = ['/^\d$/','/^\D$/'];
$cambio = ['numero','letra'];
print_r(preg_replace($patron,$cambio,$array));

$array = [1,'a','B',4];
$patron = ['/^\d$/'];
$cambio = 'numero';
print_r(preg_filter($patron,$cambio,$array));


$frase = 'maria es mi profe favorita';
$patron = '/a/';
$cambio = '@';
print_r(preg_filter($patron,$cambio,$frase));


$frase = 'Si hay una fecha 1/2/2012 está bien pero 10/2/2021 mal, y 15/12/21 mal';
 //si el mes tiene solo un digito, añadir 0 delante, y el dia igual
 //si el año tiene 2 dig, si es menor de 23 añado y si es mayor añado 19

 function corrige($coincide){
    print_r($coincide);
    if($coincide[1]<10 && strlen($coincide[1])!=2){
        $coincide[1] = '0'.$coincide[1];
    }
    if($coincide[3]<10 && strlen($coincide[3])!=2){
        $coincide[3] = '0'.$coincide[3];
    }
    if($coincide[5]<=23){
    $coincide[5] = '20'.$coincide[5];
    } elseif($coincide[5]>23 && $coincide[5]<100){
        $coincide[5] = '19'.$coincide[5];
    }
    return $coincide[1].$coincide[2].$coincide[3].$coincide[4].$coincide[5];
 }

 $exp = '/(\d{1,2})(\/)(\d{1,2})(\/)(\d{2,4})/';
 //preg_match_all($exp,$frase,$array);
 //print_r($array);

 print_r(preg_replace_callback($exp,'corrige',$frase));