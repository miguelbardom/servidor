<?

function insertarCookie($id){
    if(!($_GET[$id])){
        setcookie('id[0]',$_GET['id'],time()+(3600*24),"/");
    }else{
        if($id)
    }

    setcookie('id[0]',$_GET['id'],time()+(3600*24),"/");
    setcookie('id[1]',$_GET['id'],time()+(3600*24),"/");
    setcookie('id[2]',$_GET['id'],time()+(3600*24),"/");
    //print_r();
    //si no existe alguno

    //existe
    //buscar si existe el mismo
    //si es el mismo

    //si no es el mismo

}
function insertCookie($id){
    if(!in_array($id,$_COOKIE['id'])){
        if(isset($_COOKIE['id'][2])){
            setcookie('id[3]',$_COOKIE['id'][2], time()+(3600*24),"/");
        }
        setcookie('id[2]',$_COOKIE['id'][1], time()+(3600*24),"/");
        setcookie('id[1]',$id, time()+(3600*24),"/");
    } else {
        if($id == $_COOKIE['id'])
    }
}