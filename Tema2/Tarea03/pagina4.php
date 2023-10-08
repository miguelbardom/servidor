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
            
            $diaA = $_GET['dayA'];
            $mesA = $_GET['monthA'];
            $anhoA = $_GET['yearA'];
            
            $fechaA = strtotime($mesA."/".$diaA."/".$anhoA);
            echo "La fecha de cumpleaños de la persona 1 es: ";
            echo "<p>".date("d/m/y",$fechaA)."</p>";

            $diaB = $_GET['dayB'];
            $mesB = $_GET['monthB'];
            $anhoB = $_GET['yearB'];
            
            $fechaB = strtotime($mesB."/".$diaB."/".$anhoB);
            echo "La fecha de cumpleaños de la persona 2 es: ";
            echo "<p>".date("d/m/y",$fechaB)."</p>";

            $diferencia = $fechaB - $fechaA;
            echo "Diferencia de edad en años de la persona 1 respecto a la persona 2: ";
            echo "<p>".((($diferencia/60)/60)/24)/365 . "</p>";

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