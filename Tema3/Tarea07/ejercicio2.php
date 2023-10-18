<?php


function rellenarArray($array,$min,$max,$total,$bool){
    
    for ($i=0; $i < $total; $i++) {

        $aleatorio = random_int($min,$max);

        if ($bool == false) {

            while (in_array($aleatorio,$array)) {
                $aleatorio = random_int($min,$max);
            }
            array_push($array, $aleatorio);

        } else {
            
            array_push($array, $aleatorio);
        }
    }
}