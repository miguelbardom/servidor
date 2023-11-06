<?php
    include("./validarFormulario.php");

    if(count($_FILES)!=0){
        $ruta = "/var/www/servidor/Tema3/Tarea09/";
        
        $ruta .= basename($_FILES['fichero']['name']);
        if(move_uploaded_file($_FILES['fichero']['tmp_name'],$ruta)){
            echo "Archivo subido: ";
        } else {
            echo "La subida ha fallado";
        }
    }
    echo $ruta;
    function mostrarFoto(){
        return $ruta;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        echo "<br>";
    ?>
    <img src="<?php
    mostrarFoto();
    ?>" alt="">Hola
</body>
</html>