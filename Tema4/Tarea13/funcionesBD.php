<?

require('./confBD.php');

// CREATE

$con = new mysqli();
try {
    $con->connect(IP, USER, PASS, 'rios');
    $script = '';
    $con->multi_query($script);
    do {
        $con->store_result();
        if (!$con->next_result()) {
            break;
        }
    } while (true);

    // $sql = 'create table arroyos (nombre varchar(25));';
    // $stmt = $con->stmt_init();
    // $stmt->prepare($sql);
    // $nombre = 'Raul'; $edad = 35; $id = 3;
    // $stmt->bind_param('sii', $nombre, $edad, $id);
    // $stmt->execute();
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


// READ

$con = new mysqli();
try {
    $con->connect(IP, USER, PASS, 'rios');
    $script = '';
    $con->multi_query($script);
    do {
        $con->store_result();
        if (!$con->next_result()) {
            break;
        }
    } while (true);

    // $sql = 'update alumnos set nombre = ?, edad = ? where id = ?';
    // $stmt = $con->stmt_init();
    // $stmt->prepare($sql);
    // $nombre = 'Raul'; $edad = 35; $id = 3;
    // $stmt->bind_param('sii', $nombre, $edad, $id);
    // $stmt->execute();
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


//UPDATE

$con = new mysqli();
try {
    $con->connect(IP, USER, PASS, 'rios');
    $script = '';
    $con->multi_query($script);
    do {
        $con->store_result();
        if (!$con->next_result()) {
            break;
        }
    } while (true);

    // $sql = 'create table arroyos (nombre varchar(25));';
    // $stmt = $con->stmt_init();
    // $stmt->prepare($sql);
    // $nombre = 'Raul'; $edad = 35; $id = 3;
    // $stmt->bind_param('sii', $nombre, $edad, $id);
    // $stmt->execute();
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