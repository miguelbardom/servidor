<?php

function enviado($name){
    if (isset($_REQUEST[$name])) {
        return true;
    }
    return false;
}

function recuerda($name, $submit){
    if(enviado($submit) && !empty($_REQUEST[$name])){
        echo $_REQUEST[$name];
    }
}

function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function validado(){
    if(isset($_SESSION['usuario']))
        return true;
}

function textVacio($name){
    if (empty($_REQUEST[$name])) {
        return true;
    } else {
        return false;
    }
}

function validaLogin(&$errores){
    if(textVacio('user')){
        $errores['user'] = "Usuario vacío";
    }
    if (textVacio('pass')) {
        $errores['pass'] = "Contraseña vacía";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}

function validaRegistro(&$errores){
    if(textVacio('nombre')){
        $errores['nombre'] = "Nombre vacío";
    }
    if(textVacio('apellidos')){
        $errores['apellidos'] = "Apellidos vacío";
    }
    if(textVacio('user')){
        $errores['user'] = "Usuario vacío";
    }
    if (textVacio('pass')) {
        $errores['pass'] = "Contraseña vacía";
    } else {
        // if(validaPass('pass')){
        //     $errores['valPass'] = "Formato incorrecto";
        // }
    }
    if(textVacio('passRep')){
        $errores['passRep'] = "Repite la contraseña introducida";
    } else {
        if(validaPassRep('passRep')){
            $errores['passRepVal'] = "No coincide con la contraseña que has introducido anteriormente";
        }
    }
    if (textVacio('email')) {
        $errores['email'] = "Email vacío";
    }
    if (textVacio('fecha_nacimiento')) {
        $errores['fecha_nacimiento'] = "Fecha de nacimiento vacía";
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}

/*
function validaPass($name){
    $exp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+$/";
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}
*/
function validaPassRep($name){
    if($_REQUEST[$name]===$_REQUEST['pass']){
        return false;
    } else {
        return true;
    }
}



function validaRegistroProd(&$errores){
    if(textVacio('nombre_produ')){
        $errores['nombre_produ'] = "Nombre del producto vacío";
    }
    if (selectVacio('categoria_produ')) {
        $errores['categoria_produ'] = "Debes seleccionar una categoría";
    }
    if(textVacio('precio_produ')){
        $errores['precio_produ'] = "Indica el precio del producto en euros";
    } else {
        if(validaNumDecimal('precio_produ')){
            $errores['precio_produ'] = "Formato incorrecto. Debe ser un número seguido de un punto decimal y de un máximo de dos decimales";
        }
    }
    if(textVacio('desc_produ')){
        $errores['desc_produ'] = "Introduce una descripción para el producto";
    } else {
        //maximo 255 caracteres
    }
    if(ficheroVacio('img_produ')){
        $errores['img_produ'] = "Debes seleccionar una imagen para tu producto";
    } else {
        if(formatoFichero('img_produ')){
            $errores['img_produ'] = "Formato de archivo no permitido";
        }
    }
    if (count($errores)==0)
        return true;
    else
        return false;
}

function validaNumDecimal($name){
    $exp = "/^(0|[1-9]\d{0,8})(\.\d{1,2})?$/"; //"/^\d*([\.,]?\d+)?$/";

    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function ficheroVacio($name){
    if (isset($_FILES[$name]) && $_FILES[$name]['error'] === UPLOAD_ERR_NO_FILE) {
        return true;
    } else {
        return false;
    }
}

function formatoFichero($name){
    list($formato) = explode("/",$_FILES[$name]['type']);
    if($formato=='jpg' || $formato=='jpeg' || $formato=='png' || $formato=='bmp'){
        return true;
    } else {
        return false;
    }
}

function subirFoto($name){
    if(count($_FILES)!=0){
        $ruta = IMG;
        $ruta .= basename($_FILES[$name]['name']);
        $_SESSION['ruta_foto'] = $ruta;
        if(move_uploaded_file($_FILES[$name]['tmp_name'],$ruta)){
            // echo "Archivo subido: ";
            return true;
        } else {
            // echo "La subida ha fallado";
            return false;
        }
    }
}

function selectVacio($name){
    if (isset($_REQUEST[$name]) && $_REQUEST[$name]!=0)
        return false;
    return true;
}
function recuerdaSelect($name,$value,$submit){
    if(enviado($submit) && isset($_REQUEST[$name]) && $_REQUEST[$name]==$value)
        echo 'selected';
    else if (isset($_REQUEST[$name]))
        echo '';
}


/*
function validaEmail($name){
    $exp = "/^.+@.+\..{2,}$/";
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaFecha($name){
    $exp = '/(\d{1,2})(\/)(\d{1,2})(\/)(\d{2,4})/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}
*/