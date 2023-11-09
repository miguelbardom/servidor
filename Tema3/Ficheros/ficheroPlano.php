<?php
/*
//primero ver si existe
//abrimos y lo leemos
if(file_exists('fichero.txt')){
    echo "Existe";
    if(!$fp = fopen('fichero.txt','r'))
        echo "Ha habido un problema al abrir el fichero";
    else{
        $leido = fread($fp,filesize('fichero.txt'));
        echo $leido;
    fclose($fp);
    }
}else{
    echo "No existe";
}


//Escribir el anterior. con w borra lo anterior; con a escribe al final del fichero
echo "<h1>Escribir fichero con w borra lo anterior</h1>";
if(file_exists('fichero.txt')){
    echo "Existe";
    if(!$fp = fopen('fichero.txt','a'))
        echo "Ha habido un problema al abrir el fichero";
    else{
        $texto = "Escribiendo...";
        if(!fwrite($fp,$texto,strlen($texto)))
            echo "Error al escribir";
        fclose($fp);
    }
}else{
    echo "No existe";
}


//Escribir en el medio
echo "<h1>Escribir en el medio</h1>";
if(file_exists('fichero.txt')){
    echo "Existe";
    if(!$fp = fopen('fichero.txt','c'))
        echo "Ha habido un problema al abrir el fichero";
    else{
        $texto = "medio";
        fseek($fp, 28);
        if(!fwrite($fp,$texto,strlen($texto)))
            echo "Error al escribir";
        fclose($fp);
    }
}else{
    echo "No existe";
}
*/

/*
//Leer un fichero por lineas
echo "<h1>Leer un fichero por lineas</h1>";
if(file_exists('ficheroLineas.txt')){
    echo "Existe";
    if(!$fp = fopen('ficheroLineas.txt','r'))
        echo "Ha habido un problema al abrir el fichero";
    else{
        while ($leido = fgets($fp,filesize("ficheroLineas.txt"))) {
            echo "<br>".$leido;
        }

        fclose($fp);
    }
}else{
    echo "No existe";
}
*/
/*
//Escribir un fichero por lineas al final
echo "<h1>Escribir un fichero por lineas al final</h1>";
if(file_exists('ficheroLineas.txt')){
    echo "Existe";
    if(!$fp = fopen('ficheroLineas.txt','a'))
        echo "Ha habido un problema al abrir el fichero";
    else{
        $texto = "\nMi nueva línea";
        if(!fputs($fp,$texto,strlen($texto)))
            echo "Error al escribir";
        fclose($fp);
    }
}else{
    echo "No existe";
}
*/


//Escribir en la segunda linea

//Cuando queremos modificar un fichero secuencial
//crear un archivo temporal leer y modificar
//borrar el anterior y renombrar el temp con el nombre del anterior

$tmp = tempnam('.',"temp.txt");
if(file_exists('ficheroLineas.txt')){
    echo "Existe";
    if((!$fp = fopen('ficheroLineas.txt','r')) || (!$ft = fopen($tmp,'w')) )
        echo "Ha habido un problema al abrir el fichero";
    else{
        $texto = 'Línea nueva';
        $contador = 5;
        while ($leido = fgets($fp,filesize("ficheroLineas.txt"))) {
            fputs($ft,$leido,strlen($leido));
            if($contador==5){
                fputs($ft,$texto,strlen($texto));
                fputs($ft,"\n",strlen('\n'));
                $contador++;
            }
        }
        fclose($fp);
        fclose($ft);
        unlink("ficheroLineas.txt");
        rename($tmp,"ficheroLineas.txt");
        chmod("ficheroLineas.txt",0777);
    }
}else{
    echo "No existe";
}