<?

if (isset($_REQUEST['Iniciar_Partida_Aleat'])) {
    $_SESSION['vista'] = VIEW.'palabraPartida.php';
    $_SESSION['controlador'] = CON.'PartidaController.php';
    require $_SESSION['controlador'];
} 
elseif (isset($_REQUEST['Iniciar_Partida_Min'])) {
    $_SESSION['vista'] = VIEW.'palabraPartida.php';
    $_SESSION['controlador'] = CON.'PartidaController.php';
    require $_SESSION['controlador'];
}
else{
    $estadisticas = PartidaDAO::findByUser($_SESSION['usuario']->id_usuario);
    $_SESSION['estadisticas'] = $estadisticas;
}