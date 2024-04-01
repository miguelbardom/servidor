<?


if (isset($_REQUEST['Producto_Publicar'])) {

    $errores = array();
    if (validaRegistroProd($errores)) {

        if (subirFoto('img_produ')) {
            // $errores['img_produ'] = "Foto subida";

            $producto = ProductoDAO::crearProducto($_SESSION['user'], $_REQUEST['nombre_produ'], $_REQUEST['categoria_produ'], $_REQUEST['precio_produ'], $_REQUEST['desc_produ'], $_SESSION['ruta_foto']);
            $_SESSION['producto'] = $producto;
            //hay que andarse con cuidado por aqui
            // echo $_REQUEST['nombre_produ'];echo $_REQUEST['categoria_produ'];echo $_REQUEST['precio_produ'];echo $_REQUEST['desc_produ'];echo $_SESSION['ruta_foto'];

            $errores['validado'] = "Producto publicado con éxito!";

            //crear variables para ver producto
            $nombre_produ = ProductoDAO::buscarUltimoRegistro('nombre', $_SESSION['user']);
            $categoria_produ = ProductoDAO::buscarUltimoRegistro('categoria', $_SESSION['user']);
            $precio_produ = ProductoDAO::buscarUltimoRegistro('precio', $_SESSION['user']);
            $desc_produ = ProductoDAO::buscarUltimoRegistro('descripcion', $_SESSION['user']);
            $ruta_foto = ProductoDAO::buscarUltimoRegistro('imagen_url', $_SESSION['user']);
            
            // echo $nombre_produ;echo $categoria_produ;echo $precio_produ;echo $desc_produ;echo $ruta_foto;

            // $_SESSION['vista'] = VIEW . 'producto.php';
        } else {
            $errores['img_produ'] = "La subida ha fallado";
        }


    } else {

    }
}

if (isset($_REQUEST['Home_Logout'])) {
    session_destroy();
    header('Location: ./index.php');
    exit;
} elseif (isset($_REQUEST['Home_Perfil'])) {
    unset($_SESSION['producto']);
    
    $_SESSION['vista'] = VIEW . 'perfil.php';
    $_SESSION['controlador'] = CON . 'PerfilController.php';
    require $_SESSION['controlador'];
} elseif (isset($_REQUEST['Home_Logo'])) {
    unset($_SESSION['producto']);

    $_SESSION['vista'] = VIEW . 'home.php';
} else if (!isset($_SESSION['usuario'])) {
    unset($_SESSION['producto']);

    $_SESSION['vista'] = VIEW . 'home.php';
}