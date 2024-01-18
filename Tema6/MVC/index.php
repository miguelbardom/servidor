<?php

require('./config/config.php');
session_start();

if(isset($_REQUEST['login']))
{
    $_SESSION['vista'] = VIEW.'login.php';
    $_SESSION['controller'] = CON.'LoginController.php';
    // require $_SESSION['vista'];
    // exit;

} elseif(isset($_REQUEST['home']))
{
    $_SESSION['vista'] = VIEW.'home.php';
} elseif(isset($_REQUEST['logout'])){
    session_destroy();
    header('Location: ./index.php');

} elseif(isset($_REQUEST['User_verPerfil'])){
    $_SESSION['vista'] = VIEW.'verUsuario.php';
    $_SESSION['controller'] = CON.'UserController.php';
} elseif(isset($_REQUEST['Citas_verCitas'])){
    $_SESSION['vista'] = VIEW.'verCitas.php';
    $_SESSION['controller'] = CON.'CitasController.php';
}

if(isset($_SESSION['controller'])){
    require($_SESSION['controller']);
}
require('./views/layout.php');

/*
echo "<pre>";
print_r(CitaDAO::findAll());
//print_r(CitaDAO::findById(1));

$cita = new Cita('','dermatologo', 'Esta creciendo un lunar', '2024-06-03', true, 2);
$cita->fecha = '2030-05-12';
CitaDAO::update($cita);
print_r(CitaDAO::findAll());

$usuario = UserDAO::findById(1);
print_r(CitaDAO::findByPaciente($usuario));


echo "</pre>";
*/





/***********************************
 


***********************************/

//echo "<pre>";

/*
print_r(UserDAO::findAll());

print_r(UserDAO::findById('0'));
//$usuario = new User('2',sha1('lucia'),'lucia','2024-01-11','usuario');
//UserDAO::insert($usuario);

$usuario = UserDAO::findById('2');
$usuario->descUsuario = 'Ana';
UserDAO::update($usuario);
print_r(UserDAO::findAll());

$user2 = new User('3',sha1('Luis'),'Luis');
$usuario->descUsuario = 'Lucia';
UserDAO::update($usuario);
UserDAO::insert($user2);
print_r(UserDAO::findAll());
*/

/*
$usuario = UserDAO::buscarPorNombre('ma');
print_r($usuario);
*/
/*
$usuario = UserDAO::validarUsuario('miguel','miguel');
print_r($usuario);
*/