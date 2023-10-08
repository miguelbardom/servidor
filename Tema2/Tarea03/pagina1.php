<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 03 - Página 1</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        include("../../fragmentos/header.html");
    ?>
    <main>
        <h2>TEMA 2 - Tarea 03</h2>
        <?php
            echo "<h3>Página 1</h3>";

            echo "a. El fichero que se está ejecutando es:";
            echo "<pre>";
            echo "$_SERVER[SCRIPT_NAME]";
            echo "</pre>";
           
            echo "b. La dirección IP del equipo desde el que se está accediendo es:";
            echo "<pre>";
            echo "$_SERVER[REMOTE_ADDR]";
            echo "</pre>";
           
            echo "c. El path donde se encuentra el fichero que se está ejecutando es:";
            echo "<pre>";
            echo "$_SERVER[PATH]";
            echo "</pre>";
           
            echo "d. La fecha y hora actual formateada en (mes/día/año) y (hh/mm/ss): ";
            date_default_timezone_set("Europe/Madrid");
            echo "<pre>";
            echo date("m/d/y H:i:s");
            echo "</pre>";
           
            echo "e. La fecha y hora actual en Oporto formateada en (día/mes/año), (hh/mm/ss) y Zona horaria: ";
            date_default_timezone_set("Europe/Lisbon");
            echo "<pre>";
            echo date("m/d/y H:i:s ");
            echo date("P");
            echo "</pre>";
           
            echo "f. Mi fecha de cumpleaños en date:";
            $miCumple = strtotime("01/15/1999");
            echo "<pre>".$miCumple."</pre>";
            echo "&nbsp &nbsp y en timestamp:";
            echo "<pre>".date("d/m/y",$miCumple)."</pre>";
           
            echo "g. La fecha y el día de la semana es: ";
            $hoy = strtotime("now + 60 day");
            echo "<p>".date("d/m/y ",$hoy).date("l",$hoy)."</p>";

            echo "<a href='http://".$_SERVER['SERVER_ADDR']."/vercodigo.php?fichero=".$_SERVER['SCRIPT_FILENAME']."'>Pulsa para ver el código PHP</a>";
            echo "<br><br>";
            
        ?>
    </main>

    <?php
        include("../../fragmentos/footer.html");
    ?>
</body>
</html>