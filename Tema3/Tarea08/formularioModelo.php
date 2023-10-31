<?php
    include("./validarModelo.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Modelo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="" method="post" name="formulario modelo" enctype="multipart/form-data">
        <h3>Formulario de registro</h3>

        <label for="alfab">Alfabético <input type="text" name="alfab" id="alfab" placeholder="Nombre"></label>
        <br>
        <label for="alfabOpc">Alfabético Opcional <input type="text" name="alfabOpc" id="alfabOpc" placeholder="Nombre"></label>
        <br>
        <label for="alfanum">Alfanumérico <input type="text" name="alfanum" id="alfanum" placeholder="Apellido"></label>
        <br>
        <label for="alfanumOpc">Alfanumérico Opcional <input type="text" name="alfanumOpc" id="alfanumOpc" placeholder="Apellido"></label>
        <br>
        <label for="number">Numérico <input type="number" name="number" id="number" placeholder=""></label>
        <br>
        <label for="numberOpc">Numérico Opcional <input type="number" name="numberOpc" id="numberOpc" placeholder=""></label>
        <br>
        <label for="fecha">Fecha <input type="date" name="fecha" id="fecha"></label>
        <br>
        <label for="fechaOpc">Fecha <input type="date" name="fechaOpc" id="fechaOpc"></label>
        <br>
        <label>Radio Obligatorio</label>
        <br>
        <label for="opcion1">Opcion1 <input type="radio" name="opcion" id="opcion1"></label>
        <label for="opcion2">Opcion1 <input type="radio" name="opcion" id="opcion2"></label>
        <label for="opcion3">Opcion1 <input type="radio" name="opcion" id="opcion3"></label>
        <br>
        <label>Select</label>
        <select name="select" id="select">
            <option value="0">Seleccione una opción</option>
            <option value="opcion1">Opción 1</option>
            <option value="opcion2">Opción 2</option>
            <option value="opcion3">Opción 3</option>
        </select>
        <br>
        <label>check</label>
        <br>
        <?php
            for ($i=1; $i < 7; $i++) { 
                echo "<label for='ch.$i'><input type='checkbox' name='check[]' id='ch.$i'>Check$i</label>";
                echo "<br>";
            }
        ?>
        <!-- <label for="ch".$i>"Check".$i <input type="checkbox" name="check[]" id="ch".$i></label> -->
        <br>
        <label for="telefono">Nº Teléfono <input type="number" name="telefono" id="telefono"></label>
        <br>
        <label for="email">Email <input type="email" name="email" id="email"></label>
        <br>
        <label for="passwd">Contraseña <input type="password" name="passwd" id="passwd"></label>
        <br>
        <label for="fichero">Subir documento <input type="file" name="fichero" id="fichero"></label>
        <br><br>
        <input type="submit" value="Enviar" name="Enviar">


    </form>



</body>
</html>