<?

class UserDAO{
    public static function findAll(){
        $sql = "select * from Usuario";
        $parametros = array();
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        $array_usuarios = array();
        while ($usuarioStd = $result->fetchObject()) {  //$codUsuario,$password,$descUsuario,$fechaUltimaConexion,$perfil,$activo
            $usuario = new User(
                $usuarioStd->codUsuario,
                $usuarioStd->password,
                $usuarioStd->descUsuario,
                $usuarioStd->fechaUltimaConexion,
                $usuarioStd->perfil,
                $usuarioStd->activo
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
                $usuarioStd->perfil,
                $usuarioStd->activo
            );
            return $usuario;
        } else {
            return null;
        }
    }

    public static function insert($usuario){
        $sql = "insert into Usuario (codUsuario,password,descUsuario,fechaUltimaConexion,activo) values (?,?,?,?,?)";
        //insertar todos los atributos
        $parametros = array($usuario->codUsuario,
            $usuario->descUsuario,
            sha1($usuario->password),
            $usuario->fechaUltimaConexion,
            $usuario->activo
        );

        $result = FactoryBD::realizaConsulta($sql,$parametros);
        return true;
    }

    public static function update($usuario){
        $sql = "update Usuario set descUsuario = ?, fechaUltimaConexion = ?, perfil = ?, activo = true 
        where codUsuario = ?";
        //aqui no se puede usar lo del array porque no está en el orden que necesitamos
        $parametros = array(
            $usuario->descUsuario,
            $usuario->fechaUltimaConexion,
            $usuario->perfil,
            $usuario->activo,
            $usuario->codUsuario
        );

        $result = FactoryBD::realizaConsulta($sql,$parametros);
        return true;
    }

    public static function cambioContraseña($usuario){
        $sql = "update Usuario set password = ?, descUsuario = ?, fechaUltimaConexion = ?, perfil = ?, activo = true 
        where codUsuario = ?";
        //aqui no se puede usar lo del array porque no está en el orden que necesitamos
        $parametros = array(
            sha1($usuario->password),
            $usuario->descUsuario,
            $usuario->fechaUltimaConexion,
            $usuario->perfil,
            $usuario->activo,
            $usuario->codUsuario
        );

        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if($result->rowCount() > 0)
            return true;
    }

    public static function delete($usuario){
        $sql = "update Usuario set activo = false where codUsuario = ?";
        //insertar todos los atributos
        $parametros = array($usuario->codUsuario);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if($result->rowCount() > 0)
            return true;
    }

    public static function activar($usuario){
        $sql = "update Usuario set activo = true where codUsuario = ?";
        //insertar todos los atributos
        $parametros = array($usuario->codUsuario);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if($result->rowCount() > 0)
            return true;
    }

    //findByDescUsuario
    public static function buscarPorNombre($nombre){
        //return 1 objeto usuario
        $sql = "select * from Usuario where descUsuario like ?";
        $nombre = '%'.$nombre.'%';
        $parametros = array($nombre);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        
        if($result->rowCount()==1){
            $usuarioStd = $result->fetchObject();
            $usuario = new User(
                $usuarioStd->codUsuario,
                $usuarioStd->password,
                $usuarioStd->descUsuario,
                $usuarioStd->fechaUltimaConexion,
                $usuarioStd->perfil,
                $usuarioStd->activo
            );
            return $usuario;
        } else {
            return null;
        }
    }

    public static function validarUsuario($nombre, $password){
        $sql = "select * from Usuario where descUsuario = ? and password = ? and activo = true";
        $password = sha1($password);
        $parametros = array($nombre,$password);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if($result->rowCount()==1){
            $usuarioStd = $result->fetchObject();
            $usuario = new User(
                $usuarioStd->codUsuario,
                $usuarioStd->password,
                $usuarioStd->descUsuario,
                $usuarioStd->fechaUltimaConexion,
                $usuarioStd->perfil,
                $usuarioStd->activo
            );
            echo "LOGIN CORRECTO!<br><br>";
            return $usuario;
        } else {
            echo "Login incorrecto";
            return null;
        }
    }
}