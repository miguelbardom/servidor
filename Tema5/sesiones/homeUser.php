<?
    session_start();
    if(!isset($_SESSION['usuario'])){
        $_SESSION['error'] = 'No tiene permisos para entrar en PaginaUser';
        header('Location: ./login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página User</h1>
    <?
        echo "Bienvenido " .$_SESSION['usuario']['nombre'];
        echo "Puedes acceder a";
    ?>
    <p></p>
    <a href="./logout.php">Cerrar sesión</a>
</body>
</html>