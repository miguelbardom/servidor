<?

require './config/config.php';

//instanciar la sesion
session_start();

if (isset($_REQUEST['Home_Login'])) {
    $_SESSION['vista'] = VIEW.'login.php';
    $_SESSION['controlador'] = CON.'LoginController.php';
    require $_SESSION['controlador'];
}
 elseif (isset($_REQUEST['Home_Registro'])) {
    $_SESSION['vista'] = VIEW.'registro.php';
    $_SESSION['controlador'] = CON.'RegistroController.php';
    require $_SESSION['controlador'];
}
 elseif (isset($_REQUEST['Home_Perfil'])) {
    $_SESSION['vista'] = VIEW.'perfil.php';
    $_SESSION['controlador'] = CON.'PerfilController.php';
    require $_SESSION['controlador'];
}
 elseif (isset($_REQUEST['Home_Logout'])) {
    session_destroy();
    header('Location: ./index.php');
    exit;
}
if (isset($_REQUEST['Home_Logo'])) {
    $_SESSION['vista'] = VIEW.'home.php';
}
 elseif (isset($_SESSION['controlador'])) {
    require $_SESSION['controlador'];
}
 else if(!isset($_SESSION['usuario'])){
    $_SESSION['vista'] = VIEW .'home.php';
}
 else {
    // require $_SESSION['controlador'];
}

require VIEW.'layout.php';

