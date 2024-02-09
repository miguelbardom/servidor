<?

$estadisticas = PartidaDAO::findAllEstadisticas();
if ($estadisticas != null) {
    $_SESSION['estadisticas'] = $estadisticas;
}
