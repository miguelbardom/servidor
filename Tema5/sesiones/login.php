<?
session_start();
require('./funciones/validaciones.php');
require('./funciones/conexionBD.php');
    if(enviado() && !textVacio('user') && !textVacio('pass')){
        $usuario = validaUsuario($_REQUEST['user'],$_REQUEST['pass']);
        if($usuario){
            $_SESSION['usuario'] = $usuario;
            header('Location: ./homeUser.php');
        }else{
            echo "No existe usuario o contraseña";
        }
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
    <?
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }
    ?>
    <h1>Login</h1>

    <form action="" method="post">
        <label for="user">Nombre:</label>
        <input type="text" name="user" id="user">
        <label for="pass">Nombre:</label>
        <input type="text" name="pass" id="pass">
        <input type="submit" value="Entrar" name="Enviar">
    </form>

</body>
</html>