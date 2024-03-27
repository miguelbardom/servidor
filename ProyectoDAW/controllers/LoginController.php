<?

if(isset($_REQUEST['Home_Registro']))
{
    $_SESSION['vista'] = VIEW.'registro.php';
    $_SESSION['controlador'] = CON.'RegistroController.php';
    require $_SESSION['controlador'];
} 
 elseif (isset($_REQUEST['Login_IniciarSesion']))
{
    //ver si nombre y contraseña no estan vacios
    $errores = array();
    if(validaLogin($errores)){
        //validado el usuario en la base de datos
        $usuario = UserDAO::validarUsuario($_REQUEST['user'],$_REQUEST['pass']);
        //iniciar sesion validada
        if($usuario != null){
            $_SESSION['user'] = $_REQUEST['user'];
            // $_SESSION['pass'] = $_REQUEST['pass'];

            $_SESSION['usuario'] = $usuario;
            $_SESSION['vista'] = VIEW.'home.php';
            // $_SESSION['controlador'] = CON.'HomeController.php';
            // require $_SESSION['controlador'];
            unset($_SESSION['controlador']);
            header('Location: ./index.php');
            exit;
        } else {
            $errores['validado'] = "No existe el usuario y/o contraseña";
        }
    }
}

if (isset($_REQUEST['Home_Logo'])){
    $_SESSION['vista'] = VIEW.'home.php';
    unset($_SESSION['controlador']);
    header('Location: ./index.php');
    exit;
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