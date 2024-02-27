<?    
    require('curl.php');
    require('confApi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listar institutos</h1>
    <?    
        $institutos = get('institutos');
        $institutos = json_decode($institutos, true);



    ?>

<table>
    <thead>
        <th>id</th>
        <th>Nombre</th>
        <th>Localidad</th>
        <th>Telefono</th>
    </thead>
    <tbody>
        <?

        foreach ($institutos as $c) {
            echo "<tr>";

                echo "<td>".$c['id']."</td>";
                echo "<td>".$c['nombre']."</td>";
                echo "<td>".$c['localidad']."</td>";
                echo "<td>".$c['telefono']."</td>";

            echo "</tr>";
        }

        ?>
    </tbody>
</table>
    <a href="insertar.php">Insertar instituto</a>
</body>
</html>