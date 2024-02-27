<?

require ('./dao/UserDAO.php');

class UserController extends Base{
    public static function users(){
        $metodo = $_SERVER['REQUEST_METHOD'];
        $recursos = self::divideURI();
        $filtros = self::condiciones();
        switch ($metodo) {
            case 'GET':
                if(count($recursos)==2 && count($filtros) == 0){ //si tiene dos, sabemos que no tiene nada detras
                    $datos = UserDAO::;
                } else if(count($recursos)==2 && count($filtros) == 1) {
                    $datos = self::;
                } else {
                    self::response("HTTP/1.0 400 No está indicando los recursos necesarios");
                }
                $datos = json_encode($datos);
                self::response('HTTP/1.0 200 OK', $datos);
                break;
            
            case 'POST':
                $datos = file_get_contents('php://input');
                $datos = json_decode($datos, true);
                if(isset($datos['nombre']) && isset($datos['localidad']) && isset($datos['telefono'])){
                    $insti = new Instituto(
                        null, $datos['nombre'], $datos['localidad'], $datos['telefono']
                    );
                    if(CocheDAO::insert($insti)){
                        $insti = InstitutoDAO::findLast();
                        $insti = json_encode($insti);
                        self::response("HTTP/1.0 201 Insertado correctamente", $insti);
                    }
                }
                break;

            default:
                self::response("HTTP/1.0 400 No permite el método utilizado");
                break;
        }
    }



}