<?php

function escribirFichero($pelicula){
    if(file_exists('peliculas.txt')){
        echo "Existe";
        if(!$fp = fopen('peliculas.txt','a'))
            echo "Ha habido un problema al abrir el fichero";
        else{
            $texto = "\n";
            if(!fputs($fp,$texto,strlen($texto))){
                echo "Error al escribir";
            }
            foreach ($pelicula as $key => $value) {
                if ($key != 'Enviar') {
                    $texto = "\n".$key.": ".$value;
                    if(!fputs($fp,$texto,strlen($texto))){
                        echo "Error al escribir";
                    }   
                }
            }
            fclose($fp);
        }
    }else{
        echo "No existe";
    }
}

function leerFichero(){
    if(file_exists('peliculas.txt')){
        echo "Existe";
        if(!$fp = fopen('peliculas.txt','r'))
            echo "Ha habido un problema al abrir el fichero";
        else{
            $leido = fread($fp,filesize('peliculas.txt'));
            echo $leido;
        fclose($fp);
        }
    }else{
        echo "No existe";
    }
}

function leeFichero(){
    if(!$fp = fopen('peliculas.txt','r'))
        return false;
    else{
        $leido = fread($fp,filesize('peliculas.txt'));
        echo $leido;
        fclose($fp);
    }
}