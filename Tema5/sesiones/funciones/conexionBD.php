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

function misPaginas(){
    try{
        $DSN = 'mysql:host='.IP.';dbname='.BD;
        $con = new PDO($DSN,USER,PASS);
        $sql = 'select url from paginas where codigo in 
        (select codigoPagina from accede where codigoPerfil = ?)';
        $stmt = $con->prepare($sql);
        $stmt->execute([$_SESSION['usuario']['perfil']]);
        $paginas = array();
        while($pagina = $stmt->fetch(PDO::FETCH_ASSOC)){
            array_push($paginas,$pagina['url']);
        }
        if(count($paginas)>0){
            $_SESSION['usuario']['paginas'] = $paginas;
            return $paginas;
        } else {
            return false;
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    } finally {
        unset($con);
    }
}

