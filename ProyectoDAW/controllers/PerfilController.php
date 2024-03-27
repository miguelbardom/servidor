<?


if (isset($_REQUEST['Perfil_PublicarProducto'])) {
    $_SESSION['vista'] = VIEW .'publicarProducto.php';
    $_SESSION['controlador'] = CON.'ProductoController.php';
    require $_SESSION['controlador'];
}

if (isset($_REQUEST['Home_Logout'])) {
    session_destroy();
    header('Location: ./index.php');
    exit;
}
 elseif (isset($_REQUEST['Home_Logo'])) {
    $_SESSION['vista'] = VIEW.'home.php';
}
 else if(!isset($_SESSION['usuario'])){
    $_SESSION['vista'] = VIEW .'home.php';
}