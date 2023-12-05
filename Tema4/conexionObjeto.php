<?php

require('./confBD.php');
/*
$con = new mysqli();
try {
    $con->connect(IP, USER, PASS, 'prueba');
    $sql = 'update alumnos set nombre = ?, edad = ? where id = ?';
    $stmt = $con->stmt_init();
    $stmt->prepare($sql);
    $nombre = 'Raul'; $edad = 35; $id = 3;
    $stmt->bind_param('sii', $nombre, $edad, $id);
    $stmt->execute();
    $con->close();



} catch (\Throwable $th) {
    //throw $th;
    switch ($th->getCode()) {
        case '1062':
            echo "Ha introducido el mismo id";
            break;
        
        default:
            echo $th->getMessage();
            break;
    }
    echo "Error";//error de dns
    mysqli_close($con);
    echo mysqli_connect_errno();
    echo mysqli_connect_error();
}
*/

$con = new mysqli();
try {
    $con->connect(IP, USER, PASS);
    $script = file_get_contents('./banco.sql');
    $con->multi_query($script);
    $con->close();


} catch (\Throwable $th) {
    //throw $th;
    switch ($th->getCode()) {
        case '1062':
            echo "Ha introducido el mismo id";
            break;
        
        default:
            echo $th->getMessage();
            break;
    }
    echo "Error";//error de dns
    mysqli_close($con);
    echo mysqli_connect_errno();
    echo mysqli_connect_error();
}