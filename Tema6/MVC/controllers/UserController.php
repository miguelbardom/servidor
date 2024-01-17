<?php
//Aqui tiene que llegar alguien que haya hecho Login
//funcionará llamando a una funcion que diga si está validado o no
if(!validado()){

    $_SESSION['vista'] = VIEW.'login.php';
    $_SESSION['controller'] = CON.'LoginController.php';

} else {
    if(isset($_REQUEST['User_Editar'])){
        $_SESSION['vista'] = VIEW.'editarUser.php';
    }
    else if(isset($_REQUEST['User_CambiarContraseña'])){
        $_SESSION['vista'] = VIEW.'editarPassUser.php';
    }
    else if(isset($_REQUEST['User_Editar'])){
        $usuario = $_SESSION['usuario'];
        if(!textVacio('nombre')){
            $usuario->descUsuario = $_REQUEST['nombre'];
            if(UserDAO::update($usuario)){

                $sms = "Se ha cambiado el nombre correctamente";
                $_SESSION['usuario'] = $usuario;
                $_SESSION['vista'] = VIEW.'verUsuario.php';
            } else {

                $errores['update'] = "No se ha podido modificar el usuario";
            }
        } else {
            $errores['nombre'] = "No puede estar vacío";
        }
    }
    else if(isset($_REQUEST['User_GuardaContraseña'])){
        $usuario = $_SESSION['usuario'];
        if(!textVacio('pass') && !textVacio('pass1') && passIgual($_REQUEST['pass'],$_REQUEST['pass1'])){
            $usuario->password = $_REQUEST['pass'];
            if(UserDAO::cambioContraseña($usuario)){
                $sms = "Se ha cambiado la contraseña correctamente";
                $_SESSION['usuario'] = $usuario;
                $_SESSION['vista'] = VIEW.'verUsuario.php';
            } else {
                $errores['update'] = "No se ha podido modificar la contraseña";
            }
        }
    }
}

