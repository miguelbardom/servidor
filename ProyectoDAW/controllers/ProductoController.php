<?


if (isset($_REQUEST['Producto_Publicar'])) {

    $errores = array();
    if (validaRegistroProd($errores)) {

        if (subirFoto('img_produ')) {
            // $errores['img_produ'] = "Foto subida";

            $producto = ProductoDAO::crearProducto($_REQUEST['nombre_produ'], $_SESSION['user'], $_REQUEST['categoria_produ'], $_REQUEST['precio_produ'], $_REQUEST['desc_produ'], $_SESSION['ruta_foto']);
            $_SESSION['producto'] = $producto;
            //hay que andarse con cuidado por aqui

            $errores['validado'] = "Producto publicado con éxito!";

            //crear variables para ver producto
            $nombre_produ = ProductoDAO::buscarRegistroPorUser('nombre', $_SESSION['user']);
            $categoria_produ = ProductoDAO::buscarRegistroPorUser('categoria', $_SESSION['user']);
            $precio_produ = ProductoDAO::buscarRegistroPorUser('precio', $_SESSION['user']);
            $desc_produ = ProductoDAO::buscarRegistroPorUser('descripcion', $_SESSION['user']);
            $ruta_foto = ProductoDAO::buscarRegistroPorUser('imagen_url', $_SESSION['user']);

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