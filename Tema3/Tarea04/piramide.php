<?php
$lineas = 4;
$espacios = $lineas-1;
$asteriscos = 1;

for ($i=0; $i < $lineas; $i++) { 
    
    for ($j=0; $j < $espacios; $j++) { 
        echo "&nbsp";
        echo "&nbsp";
    
    }
    for ($y=0; $y < $asteriscos; $y++) { 
        echo "*";
    }
    echo "<br>";
    $espacios--;
    $asteriscos++;$asteriscos++;
}



?>