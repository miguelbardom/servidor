<?php

/*
function enviado(){
    if (isset($_REQUEST['Modificar'])) {
        header('Location:./leer.php?fichero='.$_REQUEST['fichero']);
    } elseif (isset($_REQUEST['Eliminar'])) {
        header('Location:./escribir.php?fichero='.$_REQUEST['fichero']);
    }
}
*/

function aModificar(){
    if (isset($_REQUEST['Modificar'])){
         header('Location:./edicion.php?oculto='.$_REQUEST['oculto']);
    }
}

$oculto = "";
function mostrarDatos(){
    if(isset($_REQUEST['oculto'])){
        $oculto = $_REQUEST['oculto'];
    }
}

function modificar(){
    if (isset($_REQUEST['Modificar'])){
         header('Location:./notas.php?oculto='.$_REQUEST['oculto']);
    }
}

function escribir(){
    $nota1 = $_REQUEST['nota1'];
    $nota2 = $_REQUEST['nota2'];
    $nota3 = $_REQUEST['nota3'];
    
    if(file_exists('notas.csv')){
        echo "Existe";
        if((!$fp = fopen('notas.csv','r')) || (!$ft = fopen($tmp,'w')) )
            echo "Ha habido un problema al abrir el fichero";
        else{
            $texto = 'Línea nueva';
            $contador = 1;
            while ($leido = fgets($fp,filesize("notas.csv"))) {
                fputs($ft,$leido,strlen($leido));
                if($contador==1){
                    fputs($ft,$texto,strlen($texto));
                    fputs($ft,"\n",strlen('\n'));
                    $contador++;
                }
            }
            fclose($fp);
            fclose($ft);
            unlink("notas.csv");
            rename($tmp,"notas.csv");
            chmod("notas.csv",0777);
        }
    }else{
        echo "No existe";
    }
}
