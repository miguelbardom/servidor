<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 03 - Página 2</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        include("../../fragmentos/header.html");
    ?>
    <main>
        <h2>TEMA 2 - Tarea 03</h2>
        <?php
            echo "<h3>Página 2</h3>";

            echo "";

            $primera = "informática";
            $segunda = 24;
            $tercera = 21.6;
            $cuarta = true;

            $variable = ${$_GET['variable']};

            echo "El valor de mi variable es "."' ".$variable." '".", es de tipo " . gettype($variable);

            echo "<br><br>";


            echo "<a href='http://".$_SERVER['SERVER_ADDR']."/vercodigo.php?fichero=".$_SERVER['SCRIPT_FILENAME']."'>Pulsa para ver el código PHP</a>";
            echo "<br><br>";
        ?>
    </main>

    <?php
        include("../../fragmentos/footer.html");
    ?>
</body>
</html>