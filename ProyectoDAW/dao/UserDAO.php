<?

class UserDAO{

    public static function crearUsuarioNormal($nombre,$apellidos,$user,$pass,$email,$fecha_nacimiento){
        $sql = "INSERT INTO Usuarios (nombre, apellidos, user, pass, email, fechaNacimiento) VALUES (?,?,?,?,?,?)";
        $parametros = array($nombre,$apellidos,$user,$pass,$email,$fecha_nacimiento);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        return true;
    }

    public static function validarUsuario($user, $pass){
        $sql = "SELECT * FROM Usuarios WHERE user = ? AND pass = ?";
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

    public static function comprobarUser($user){
        $sql = "SELECT COUNT(*) FROM Usuarios WHERE user = ?"; //SELECT * FROM Usuarios WHERE user = ?;
        $parametros = array($user);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        $count = $result->fetchColumn();
        if($count==1) {
            // ya existe el user
            return true;
        } else {
            // no existe el user
            return false;
        }
    }

    public static function comprobarEmail($email){
        $sql = "SELECT COUNT(*) FROM Usuarios WHERE email = ?"; //SELECT * FROM Usuarios WHERE email = ?;
        $parametros = array($email);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        $count = $result->fetchColumn();
        if($count==1) {
            // ya existe el email
            return true;
        } else {
            // no existe el email
            return false;
        }
    }

}