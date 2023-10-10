<?php

$datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

sort($datos);
echo "<br>";
echo "<pre>";
$datosUnicos = array_unique($datos);
print_r($datosUnicos);
echo "</pre>";

foreach ($datosUnicos as $key => $val) {

    echo "$key = $val\n";

}






?>