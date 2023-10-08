<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 03 - Página 3</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        include("../../fragmentos/header.html");
    ?>
    <main>
        <h2>TEMA 2 - Tarea 03</h2>
        <?php
            
            $dia = $_GET['day'];
            $mes = $_GET['month'];
            $anho = $_GET['year'];
            
            $fecha = strtotime($mes."/".$dia."/".$anho);
            echo "El día de la semana de la fecha indicada por URL es: ";
            echo "<p>".date("l",$fecha)."</p>";

            echo "<br>";


            echo "<a href='http://".$_SERVER['SERVER_ADDR']."/vercodigo.php?fichero=".$_SERVER['SCRIPT_FILENAME']."'>Pulsa para ver el código PHP</a>";
            echo "<br><br>";
        ?>
    </main>

    <?php
        include("../../fragmentos/footer.html");
    ?>
</body>
</html>