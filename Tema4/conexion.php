<?
/*
require('./confBD.php');

try {
    $con = mysqli_connect(IP, USER, PASS, 'prueba');
    echo "Se ha conectado";
    $rnombre = 'manolo';
    $redad = 30;
    //$sql = "insert into alumnos (nombre,edad) values ('".$rnombre."', ".$redad.")";
    //consultas preparadas
    $sql = "insert into alumnos(nombre,edad) values(?,?)";
    $stmt = mysqli_prepare($con,$sql);
    mysqli_stmt_bind_param($stmt, 'si', $rnombre, $redad);
    mysqli_stmt_execute($stmt);

    //mysqli_query($con,$sql);

    mysqli_close($con);
} catch (\Throwable $th) {
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

/*
Posibles errores:
- IP incorrecta, aunque existe: Error 1045 Access denied for user 'miguel'@'192.168.7.201' (using password: YES)
- IP incorrecta y distinta: Error 2002 No route to host
- Usuario incorrecto: 1045 Access denied for user 'migol'@'192.168.7.201' (using password: YES)
- Password incorrecta: 1045 Access denied for user 'miguel'@'192.168.7.201' (using password: YES)
- BD incorrecta: Error 1049 Unknown database 'pruebas'
*/

require('./confBD.php');

try {
    $con = mysqli_connect(IP, USER, PASS, 'prueba');
    $sql = 'delete from alumnos where id>=5';
    $result = mysqli_query($con,$sql);
    echo mysqli_affected_rows($con);
    while($array = mysqli_fetch_assoc($result)){
        echo "<pre>";
        print_r($array);
    }
    mysqli_close($con);
} catch (\Throwable $th) {
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
