<?php

if(count($_FILES)!=0){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    echo "<br>";
    $ruta = "/var/www/servidor/Tema3/";

    for ($i=0; $i < count($_FILES['ficheros']['name']); $i++) { 
        $otraRuta = $ruta;
        $otraRuta .= basename($_FILES['ficheros']['name'][$i]);
        if(move_uploaded_file($_FILES['ficheros']['tmp_name'][$i],$otraRuta))
        echo "Archivo subido";
            else
        echo "La subida ha fallado";
        echo "<br>";
    }

    
}
// Código para subir un archivo
// $ruta = "/var/www/servidor/Tema3/";
// $ruta .= basename($_FILES['ficheros']['name']);
//     if(move_uploaded_file($_FILES['ficheros']['tmp_name'],$ruta))
//         echo "Archivo subido";
//     else
//         echo "La subida ha fallado";