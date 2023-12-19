<?
require('./seguro/datos.php');
require('./funciones.php');


if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    if(!isAdmin())
    {
        header('Location: ./index.php');
        exit;    
    }
}else{
        header('Location: ./index.php');
        exit;    
}
echo "Eres el usaurio: " .$_SERVER['PHP_AUTH_USER']

/*
if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    if($_SERVER['PHP_AUTH_USER'] != USERA || 
    hash('sha256',$_SERVER['PHP_AUTH_PW']) != PASSA)
    {
        header('Location: ./index.php');
        exit;
    }
} else {
    header('Location: ./index.php');
    exit;
}

echo "Eres el usuario: " .$_SERVER['PHP_AUTH_USER'];
*/
?>

Pagina Admin
<a href="./cerrar.php">Cerrar sesión</a>