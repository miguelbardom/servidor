<?

class Producto{
    private $codProducto;
    private $propietario;
    private $nombre;
    private $categoria;
    private $precio;
    private $descripcion;
    private $imagen_url;



    function __construct($codProducto,$propietario,$nombre,$categoria,$precio,$descripcion,$imagen_url){
        $this->codProducto = $codProducto;
        $this->propietario = $propietario;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->imagen_url = $imagen_url;
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