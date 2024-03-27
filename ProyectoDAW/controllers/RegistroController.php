<?


if(isset($_REQUEST['Registro_Registrar'])){
    // $email = $_REQUEST['email'];
    //ver si email no esta vacio
    $errores = array();
    if(validaRegistro($errores)){
        //crear usuario
        $usuario = UserDAO::crearUsuario($_REQUEST['email'],$token);
        
        //mostrar token
        $_SESSION['vista'] = VIEW.'token.php';
        $_SESSION['controlador'] = CON.'TokenController.php';
        require $_SESSION['controlador'];

    } else {
        $errores['validado'] = "No existe el usuario y contraseña";
    }

} 
 elseif (isset($_REQUEST['Home_Login'])) 
{
    $_SESSION['vista'] = VIEW .'login.php';
    $_SESSION['controlador'] = CON.'LoginController.php';
    require $_SESSION['controlador'];
}
 elseif (isset($_REQUEST['Home_Logo']))
{
    $_SESSION['vista'] = VIEW.'home.php';
    unset($_SESSION['controller']);
    header('Location: ./index.php');
    exit;
}
 elseif (isset($_REQUEST['Home_Perfil'])) {
    $_SESSION['vista'] = VIEW.'perfil.php';
    $_SESSION['controlador'] = CON.'PerfilController.php';
    require $_SESSION['controlador'];
}
 elseif (isset($_REQUEST['Home_Logout']))
{
    session_destroy();
    header('Location: ./index.php');
    exit;
}