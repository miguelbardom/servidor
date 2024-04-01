<?

class ProductoDAO{

    public static function crearProducto($propietario,$nombre,$categoria,$precio,$descripcion,$imagen_url){
        $sql = "INSERT INTO Productos (propietario, nombre, categoria, precio, descripcion, imagen_url) VALUES (?,?,?,?,?,?)";
        $parametros = array($propietario,$nombre,$categoria,$precio,$descripcion,$imagen_url);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        return true;
    }

    public static function buscarRegistroPorUser($name,$user) {
        $sql = "SELECT ? FROM Productos WHERE user = ?";
        $parametros = array($name,$user);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        // return $result->fetchAll();
        if($result->rowCount()==1){
            $registro = $result->fetchColumn();
            return $registro;
        } else {
            return null;
        }
    }


}