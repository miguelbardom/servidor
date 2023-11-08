<?php


?>

<br>
<table border="1">
    <h2>Notas</h2>
    <thead>
        <th>Alumno</th>
        <th>Nota1</th>
        <th>Nota2</th>
        <th>Nota3</th>
        <th>Editar</th>
    </thead>
    <tbody>
        
        <?php
        $leido = array();
        if(file_exists('notas.csv')){
            //echo "Existe el fichero";
            if(!$fp = fopen('notas.csv','r'))
                echo "Ha habido un problema al abrir el fichero";
            else{
                while ($leido = fgetcsv($fp,filesize("notas.csv"),';')) {
                    echo "<tr>";
                    foreach($leido as $l){
                        echo "<td>";
                        echo $l;
                        echo "</td>";
                    }
                    echo "<td>
                    <form action='' method='post'>
                        <input type='hidden' name='oculto'>
                        <input type='submit' value='Modificar' name='Modificar'>
                        <input type='submit' value='Eliminar' name='Eliminar'>
                    </form>
                </td>";
                echo "</tr>";
                }
                
    
                fclose($fp);
            }
        }else{
            echo "No existe";
        }
        ?>

    </tbody>
</table>
<form action="" method="post">
    <br>
    <input type="submit" value="Añadir" name="Añadir">
</form>