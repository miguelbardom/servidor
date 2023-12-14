<?
require('./seguro/datos.php');


if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    if(!isAdmin() && !isUser()){
        header('Location: ./index.php');
        exit;    
    }
}else{
        header('Location: ./index.php');
        exit;    
}

/*
if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    if($_SERVER['PHP_AUTH_USER'] != USER || 
    hash('sha256',$_SERVER['PHP_AUTH_PW']) != PASS)
    {
        header('Location: ./index.php');
        exit;
    }
} else {
    header('Location: ./index.php');
    exit;
}
*/
echo "Eres el usuario: " .$_SERVER['PHP_AUTH_USER'];

?>

Pagina Usuario
<a href="./cerrar.php">Cerrar sesión</a>