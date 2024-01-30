<?

require ('./dao/InstitutoDAO.php');

class InstitutoController extends Base{
    public static function institutos(){
        $metodo = $_SERVER['REQUEST_METHOD'];
        $recursos = self::divideURI();
        $filtros = self::condiciones();
        switch ($metodo) {
            case 'GET':
                if(count($recursos)==2 && count($filtros) == 0){ //si tiene dos, sabemos que no tiene nada detras
                    $datos = InstitutoDAO::findAll();
                } else if(count($recursos)==2 && count($filtros) == 0) {

                } else if(count($recursos)==3){
                    $datos = InstitutoDAO::findById($recursos[2]);
                }
                $datos = json_encode($datos);
                self::response('HTTP/1.0 200 OK', $datos);
                break;
            case 'POST':
                # code...
                break;
            case 'PUT':
                # code...
                break;
            case 'DELETE':
                # code...
                break;
            default:
                self::response("HTTP/1.0 400 No permite el método utilizado");
                break;
        }
    }

    public static function buscaConFiltros(){
        //comprobar si el nombre del filtro está permitido
        $permitidos = ['nombre', 'localidad'];
        $filtros = self::condiciones();
        foreach ($filtros as $key => $value) {
            if(!in_array($key, $permitidos)){
                self::response("HTTP/1.0 400 No permite usar el parámetro: ".$key);
            }
        }
    }
}