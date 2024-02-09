<?

require('./config/config.php');
session_start();

require('./views/layout.php');

if(!validado()){
    require(VIEW.'login.php');
    $_SESSION['controller'] = CON.'LoginController.php';
}

if(isset($_REQUEST['Login_IniciarSesion']))
{
    $_SESSION['vista'] = VIEW.'homePartida.php';
    $_SESSION['controller'] = CON.'PartidaController.php';
}
elseif(isset($_REQUEST['logout'])){
    session_destroy();
    header('Location: ./index.php');
}
elseif(isset($_REQUEST['Iniciar_Partida_Aleat'])){
    $_SESSION['vista'] = VIEW.'palabraPartida.php';
}
elseif(isset($_REQUEST['Iniciar_Partida_Min'])){
    $_SESSION['vista'] = VIEW.'palabraPartida.php';
}




if(isset($_SESSION['controller'])){
    require($_SESSION['controller']);
}


