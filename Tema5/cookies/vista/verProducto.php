<?

require('../funciones/funcionesBD.php');
require('../funciones/funciones.php');

if(!isset($_GET['id'])){
    header('Location:');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver producto</title>
</head>
<body>
    <a href="home.php"><-Volver</a>
    <?
        $producto = findByID($_GET['id']);
        if($producto){
            //crear cookie
            insertarCookie();
            echo "<h1>".$producto['nombre']."</h1>";
            echo "<p>".$producto['descripcion']."</p>";
            echo "<td><img src='../".$producto['alta']."'></td>";
        }else{
            echo "No existe el producto";
        }
    ?>
</body>
</html>