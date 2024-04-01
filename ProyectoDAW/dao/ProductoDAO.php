<?

class ProductoDAO{

    public static function crearProducto($propietario,$nombre,$categoria,$precio,$descripcion,$imagen_url){
        $sql = "INSERT INTO Productos (propietario, nombre, categoria, precio, descripcion, imagen_url) VALUES (?,?,?,?,?,?)";
        $parametros = array($propietario,$nombre,$categoria,$precio,$descripcion,$imagen_url);
        $result = FactoryBD::realizaConsulta($sql,$parametros);
        // return true;
        if ($result !== false && $result->rowCount() == 1) {
            return true; // Retorna verdadero si la inserción fue exitosa
        } else {
            // return false; // Retorna falso si la inserción falló
            return null;
        }
    }

    public static function buscarUltimoRegistro($columna, $usuario) {
        // Verifica si la columna es válida
        $columnasPermitidas = array('nombre', 'categoria', 'precio', 'descripcion', 'imagen_url');
        if (!in_array($columna, $columnasPermitidas)) {
            return null; // Si la columna no es válida, retorna null
        }
    
        // Prepara la consulta SQL dinámica
        $sql = "SELECT $columna FROM Productos WHERE propietario = ? ORDER BY codProducto DESC LIMIT 1";
        $parametros = array($usuario);
    
        // Realiza la consulta
        $result = FactoryBD::realizaConsulta($sql, $parametros);
    
        // Verifica si se encontraron resultados
        if ($result->rowCount() == 1) {
            // Obtiene el valor de la columna del último registro encontrado
            $valor = $result->fetchColumn();
            return $valor;
        } else {
            return null; // Si no se encontraron resultados, retorna null
        }
    }


}