<?

class UserDAO{
    public static function findAll(){
        $sql = "select * from Usuario";
        $parametros = array();
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        $array_usuarios = array();
        while ($usuarioStd = $result->fetchObject()) {  //$codUsuario,$password,$descUsuario,$fechaUltimaConexion,$perfil
            $usuario = new User(
                $usuarioStd->codUsuario,
                $usuarioStd->password,
                $usuarioStd->descUsuario,
                $usuarioStd->fechaUltimaConexion,
                $usuarioStd->perfil
            );
            array_push($array_usuarios,$usuario);
        }

        //return array con todos los User
        return $array_usuarios;
    }

    public static function findById($id){
        //return 1 objeto usuario
        $sql = "select * from Usuario where codUsuario = ?";
        $parametros = array($id);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        
        if($result->rowCount()==1){
            $usuarioStd = $result->fetchObject();
            $usuario = new User(
                $usuarioStd->codUsuario,
                $usuarioStd->password,
                $usuarioStd->descUsuario,
                $usuarioStd->fechaUltimaConexion,
                $usuarioStd->perfil
            );
            return $usuario;
        } else {
            return null;
        }
    }

    public static function insert($usuario){
        $sql = "insert into Usuario (codUsuario,password,descUsuario,fechaUltimaConexion) values (?,?,?,?,?)";
        //insertar todos los atributos
        $parametros = (array)$usuario;
        array_pop($parametros);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        return true;
    } //esta funcion no es definitiva
}