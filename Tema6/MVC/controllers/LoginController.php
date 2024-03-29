<?

if(isset($_REQUEST['Login_IniciarSesion'])){
    //ver si nombre y contraseña no estan vacios
    $errores = array();
    if(validaFormulario($errores)){
        //validado el usuario en la base de datos
        $usuario = UserDAO::validarUsuario($_REQUEST['nombre'],$_REQUEST['pass']);
        //iniciar sesion validada
        if($usuario != null){
            $usuario->fechaUltimaConexion = date('Y-m-d');
            UserDAO::update($usuario);
            $_SESSION['usuario'] = $usuario;
            $_SESSION['vista'] = VIEW.'home.php';
            unset($_SESSION['controller']);
        } else {
            $errores['validado'] = "No existe el usuario y contraseña";
        }
        //home, pero con modificaciones
    }
} else if(isset($_REQUEST['Login_Registro'])){
    $_SESSION['vista'] = VIEW.'registro.php';
}if(isset($_REQUEST['Login_GuardaRegistro'])){
    $errores = array();
    if(validaFormularioR($errores)){

        $usuario = new User(
            $_REQUEST['cod'],
            $_REQUEST['nombre'],
            $_REQUEST['pass'],
            date(),
        );
        if(UserDAO::insert($usuario)){
            //mandarlo a la vista
            $_SESSION['vista'] = VIEW.'login.php';
            $sms = "Se ha registrado con éxito";
        } else {
            $errores['registro'] = "No se ha podido registrar";
        }

        //validado el usuario en la base de datos
        $usuario = UserDAO::insert($usuario);

        //iniciar sesion validada
        if($usuario != null){
            $usuario->fechaUltimaConexion = date('Y-m-d');
            UserDAO::update($usuario);
            $_SESSION['usuario'] = $usuario;
            $_SESSION['vista'] = VIEW.'home.php';
            unset($_SESSION['controller']);
        } else {
            $errores['validado'] = "No existe el usuario y contraseña";
        }
    }
}