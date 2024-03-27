<?

class ProductoDAO{

    public static function crearProducto($nombre,$categoria,$precio,$descripcion,$imagen_url){
        $sql = "INSERT INTO Productos (nombre, categoria, precio, descripcion, imagen_url) VALUES (?,?,?,?,?)";
        $parametros = array($nombre,$categoria,$precio,$descripcion,$imagen_url);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        return true;
    }


}