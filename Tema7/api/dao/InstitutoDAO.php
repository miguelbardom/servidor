<?

require ('./modelo/Instituto.php');
require ('./dao/FactoryBD.php');

class InstitutoDAO{
    public static function findAll(){
        $sql = "select * from institutos";
        $parametros = array();
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id){
        $sql = "select * from institutos where id = ?";
        $parametros = array($id);
        $result = FactoryBD::realizaConsulta($sql,$parametros);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }




}