<?php
    include("./funciones.php");
    mostrarDatos();
    modificar();
    $oculto = $_REQUEST['oculto'];

    $leido = array();
        if(file_exists('notas.csv')){
            if(!$fp = fopen('notas.csv','r'))
                echo "Ha habido un problema al abrir el fichero";
            else{
                $conta = 0;
                $arrayNotas = array();
                while ($leido = fgetcsv($fp,filesize("notas.csv"),';')) {
                    
                    if($conta == $oculto){
                        $arrayNotas = $leido;
                        break;
                    }

                    $conta++;
                }
                
                fclose($fp);
            }
        }else{
            echo "No existe";
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion</title>
</head>
<body>
    
        
        <h2>Editar Notas</h2>
        <form action='' method='post'>
            <label for='alumno'>Alumno: <input type='text' name='alumno' id='alumno' value='<?php echo $arrayNotas[0]?>' readonly></label>
            <br>
            <label for='nota1'>Nota1: <input type='text' name='nota1' id='nota1' value='<?php echo $arrayNotas[1]?>'></label>
            <br>
            <label for='nota2'>Nota2: <input type='text' name='nota2' id='nota2' value='<?php echo $arrayNotas[2]?>'></label>
            <br>
            <label for='nota3'>Nota3: <input type='text' name='nota3' id='nota3' value='<?php echo $arrayNotas[3]?>'></label>
            <br><br>
            <input type='submit' value='Modificar' name='Modificar'>
        </form>
      
</body>
</html>