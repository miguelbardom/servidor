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
                } else if(count($recursos)==2 && count($filtros) > 0) {
                    $datos = self::buscaConFiltros();
                } else if(count($recursos)==3){
                    $datos = InstitutoDAO::findById($recursos[2]);
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
                    if(InstitutoDAO::insert($insti)){
                        $insti = InstitutoDAO::findLast();
                        $insti = json_encode($insti);
                        self::response("HTTP/1.0 201 Insertado correctamente", $insti);
                    }
                }
                break;

            case 'PUT':
                self::put();
                break;
            case 'DELETE':
                if(count($recursos) == 3){
                    if(InstitutoDAO::delete($recursos[2])){
                        self::response("HTTP/1.0 201 Recurso eliminado correctamente");
                    } else{
                        self::response("HTTP/1.0 200 No se ha encontrado el id");
                    }
                } else {
                    self::response("HTTP/1.0 400 No se ha introducido el id");
                }
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
        return InstitutoDAO::findByFiltros($filtros);
    }

    public static function put(){
        $recursos = self::divideURI();
        if(count($recursos)==3){
            $permitidos = ['nombre', 'localidad', 'telefono'];
            $datos = file_get_contents('php://input');
            $datos = json_decode($datos, true);
            if($datos == null){
                self::response("HTTP/1.0 400 El Json del body no está bien formado");
            }

            //verificar que los datos del body son los instituto
            foreach ($datos as $key => $value) {
                if(!in_array($key, $permitidos)){
                    self::response("HTTP/1.0 400 No permite usar el parámetro: ".$key);
                }
            }
            $insti = InstitutoDAO::findById($recursos[2]);
            if(count($insti)==1){
                $insti = (object)$insti[0];
                // parametros a modificar
                foreach ($datos as $key => $value) {
                    $insti->$key = $value;
                }

                if(InstitutoDAO::update($insti)){
                    $insti = json_encode($insti);
                    self::response("HTTP/1.0 201 Actualizado correctamente", $insti);
                }
            } else {
                self::response("HTTP/1.0 400 Está intentando modificar un instituto que no existe");
            }
            
        } else {
            self::response("HTTP/1.0 400 No ha indicado el id");
        }
    }
}