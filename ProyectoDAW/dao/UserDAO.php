<?

class UserDAO{

    public static function crearUsuario($user, $token){
        $sql = "insert into Usuarios (user, token) values (?,?)";
        $parametros = array($user, $token);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        return true;
    }

    public static function validarUsuario($user, $pass){
        $sql = "select * from Usuarios where user = ? and pass = ?";
        $parametros = array($user,$pass);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        if($result->rowCount()==1){
            $usuarioStd = $result->fetchObject();
            $usuario = new User(
                $usuarioStd->idUsuario,
                $usuarioStd->nombre,
                $usuarioStd->apellidos,
                $usuarioStd->user,
                $usuarioStd->pass,
                $usuarioStd->email,
                $usuarioStd->fechaNacimiento,
                $usuarioStd->idPerfil
            );
            // echo "LOGIN CORRECTO";
            return $usuario;
        } else {
            // echo "Login incorrecto";
            return null;
        }
    }

}