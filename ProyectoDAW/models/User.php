<?

class User{
    private $idUsuario;
    private $nombre;
    private $apellidos;
    private $user;
    private $pass;
    private $email;
    private $fechaNacimiento;
    private $idPerfil;



    function __construct($idUsuario,$nombre,$apellidos,$user,$pass,$email,$fechaNacimiento,$idPerfil){
        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->user = $user;
        $this->pass = $pass;
        $this->email = $email;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->idPerfil = $idPerfil;
    }

    public function __get($att){
        if (property_exists(__CLASS__, $att)) {
            return $this->$att;
        }
    }
    public function __set($att, $val){
        if (property_exists(__CLASS__, $att)) {
            $this->$att = $val;
        }
 
    }

}