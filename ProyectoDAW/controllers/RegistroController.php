<?


if(isset($_REQUEST['Registro_Registrar'])) {
    // $email = $_REQUEST['email'];
    //ver si email no esta vacio
    $errores = array();
    if(validaRegistro($errores)) {
        
        if(UserDAO::comprobarUser($_REQUEST['user'])){
            $errores['user'] = 'El usuario ya existe';
        }
         elseif(UserDAO::comprobarEmail($_REQUEST['email'])) {
            $errores['email'] = 'El email ya existe';
        }
         elseif(!UserDAO::comprobarUser($_REQUEST['user']) && !UserDAO::comprobarEmail($_REQUEST['email'])) {
            //crear usuario
            $usuario = UserDAO::crearUsuarioNormal($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['user'],$_REQUEST['pass'],$_REQUEST['email'],$_REQUEST['fecha_nacimiento']);
            $errores['validado'] = "Usuario registrado con éxito";
            //pintar mensaje de verde
        }


    } else {
        // $errores['validado'] = "No existe el usuario y contraseña";
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