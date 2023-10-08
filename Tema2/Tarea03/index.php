<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 03</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        include("../../fragmentos/header.html");
    ?>
    <main>
        <h2>TEMA 2 - Tarea 03</h2>

        <ul>
            <li>Página 1: incluye siete ejercicios diversos<br><a href="pagina1.php">Click aquí</a></li><br>
            <li>Página 2: varios ejemplos de paso de variables mediante URL<br>
                - <a href="pagina2.php?variable=primera">Tipo string</a><br>
                - <a href="pagina2.php?variable=segunda">Tipo int</a><br>
                - <a href="pagina2.php?variable=tercera">Tipo double</a><br>
                - <a href="pagina2.php?variable=cuarta">Tipo boolean</a><br>
            </li><br>
            <li>Página 3: obtener el día de la semana de una fecha pasada por URL (Fecha por defecto: 03/10/2023)<br><a href="pagina3.php?day=03&month=10&year=2023">Click aquí</a></li><br>
            <li>Página 4: mostrar dos fechas pasadas por parámetros y calcular la diferencia de años entre ambas<br><a href="pagina4.php?dayA=16&monthA=06&yearA=1994&dayB=15&monthB=01&yearB=1999">Click aquí</a></li>
        </ul>

        
        
    </main>

    <?php
        include("../../fragmentos/footer.html");
    ?>
</body>
</html>