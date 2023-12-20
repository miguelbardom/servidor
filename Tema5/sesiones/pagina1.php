<?
    require('./funciones/validaciones.php');
    session_start();
    sesionIniciada();
    permisosPagina(basename($_SERVER['PHP_SELF']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pagina 1</h2>
</body>
</html>