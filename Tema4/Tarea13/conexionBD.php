<?php

require('./confBD.php');

$con = new mysqli();
try {
    $con->connect(IP, USER, PASS);
    $script = file_get_contents('./rios.sql');
    $con->multi_query($script);
    do {
        $con->store_result();
        if (!$con->next_result()) {
            break;
        }
    } while (true);
    $con->close();

} catch (\Throwable $th) {
    //throw $th;
    switch ($th->getCode()) {
        case '1062':
            echo "Ha introducido el mismo id";
            break;
        case '1045':
            echo 'Usuario incorrecto, Password incorrecto o IP incorrecta, aunque exista';
            break;
        case '2002':
            echo 'IP incorrecta y distinta';
            break;
        case '1049':
            echo 'BD incorrecta';
            break;
        default:
            echo $th->getMessage();
            break;
    }
    echo "Error";//error de dns
    $con->close();
}