<?php
//Aqui tiene que llegar alguien que haya hecho Login
//funcionará llamando a una funcion que diga si está validado o no
if(!validado()){

    $_SESSION['vista'] = VIEW.'index.php';
    $_SESSION['controller'] = CON.'LoginController.php';

} else {
    $_SESSION['vista'] = VIEW.'homePartida.php';
    $_SESSION['controller'] = CON.'LoginController.php';
}

