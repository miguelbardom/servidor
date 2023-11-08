<?php

function enviado(){
    if (isset($_REQUEST['Leer'])) {
        header('Location:./leer.php?fichero='.$_REQUEST['fichero']);
    } elseif (isset($_REQUEST['Escribir'])) {
        header('Location:./escribir.php?fichero='.$_REQUEST['fichero']);
    }
}

function ficheroVacio(){
    if (empty($_REQUEST['fichero'])) {
        return true;
    } else {
        return false;
    }
}

function ficheroExiste(){
    if(file_exists($_REQUEST['fichero'])){
        return true;
    } else {
        
        return false;
    }
}

function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function crearErrores(&$errores){
    if(ficheroVacio()){
        $errores['fichero'] = "Texto vacío";
    }
    if(!ficheroExiste()){
        $errores['ficheroExiste'] = "No existe el fichero";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}

function leerFichero(){
    if(!$fp = fopen($_REQUEST['fichero'],'r'))
        return false;
    else{
        $leido = fread($fp,filesize($_REQUEST['fichero']));
        echo $leido;
        fclose($fp);
    }
}

function escribirFichero(){
    if((!$fp = fopen($_REQUEST['fichero'],'r')) || (!$ft = fopen($tmp,'w')) )
        echo "Ha habido un problema al abrir el fichero";
    else{
        $texto = 'Línea nueva';
        $contador = 1;
        while ($leido = fgets($fp,filesize($_REQUEST['fichero']))) {
            fputs($ft,$leido,strlen($leido));
            if($contador==1){
                fputs($ft,$texto,strlen($texto));
                fputs($ft,"\n",strlen('\n'));
                $contador++;
            }
        }
        fclose($fp);
        fclose($ft);
        unlink($_REQUEST['fichero']);
        rename($tmp,$_REQUEST['fichero']);
        chmod($_REQUEST['fichero'],0777);
    }
}