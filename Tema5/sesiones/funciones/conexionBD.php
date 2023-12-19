<?

require('./funciones/confBD.php');


function validaUsuario($user,$pass){
try{
    $DSN = 'mysql:host='.IP.';dbname='.BD;
    $con = new PDO($DSN,USER,PASS);
    $sql = 'select * from usuarios where usuario = ? and clave = ?';
    $stmt = $con->prepare($sql);
    $pass = sha1($pass);
    $stmt->execute([$user,$pass]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        return $usuario;
    }
    return false;
}catch(PDOException $e){
    echo $e->getMessage();
} finally {
    unset($con);
}
}

function mostrarPaginasAlUsuario(){
    try{
        $DSN = 'mysql:host='.IP.';dbname='.BD;
        $con = new PDO($DSN,USER,PASS);
        $sql = 'select codigoPagina from accede where codigoPerfil = ?'; //perfil = $_SESSION['usuario']['perfil'];
        $stmt = $con->prepare($sql);
        $pass = sha1($pass);
        $stmt->execute([$user,$pass]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if($usuario){
            return $usuario;
        }
        return false;
    }catch(PDOException $e){
        echo $e->getMessage();
    } finally {
        unset($con);
    }
}

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