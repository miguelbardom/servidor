<?
    require('../funciones/funcionesBD.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/css/styles.css">
    <title>Panadería</title>
</head>
<body>
    <div class="izq">
    <h2>Productos</h2>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Ver</th>
        </thead>
        <tbody>
            <?php
                $array_prod = findAll();
                foreach($array_prod as $prod){
                    echo "<tr>";
                    echo "<td>".$prod['nombre']."</td>";
                    echo "<td>".substr($prod['descripcion'],0,20)."</td>";
                    echo "<td><img src='../".$prod['baja']."'></td>";
                    echo "<td><a href='verProducto.php?id=".$prod['codigo']."'>Ver</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </div>
    <div class="dcha">
        <h2>Últimos visitados</h2>
        <?
            if(!empty($_COOKIE)){

                foreach($_COOKIE['id'] as $value){
                    $producto = findByID($_COOKIE['id']);
                    if($producto){
                        echo "<td><a href='verProducto.php?id=".$producto['codigo']."'><img src='../".$producto['alta']."'></td>";
                    }
                }
                
            }
            else
                echo "No ha visitado ningún producto";
        ?>
    </div>
</body>
</html>