<?php

function enviado(){
    if (isset($_REQUEST['Enviar'])) {
        return true;
    }
    return false;
}

function textVacio($name){
    if (empty($_REQUEST[$name])) {
        return true;
    } else {
        return false;
    }
}

function validaNombre($name){
    $exp = "/^[a-zA-Z]{3,}$/";
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaApe($name){
    $exp = "/^[a-zA-Z]{3,}\s[a-zA-Z]{3,}$/";
    if(preg_match($exp,$_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaPasswd($name){
    $exp = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+$/";
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaPasswdRepetido($name){
    if($_REQUEST[$name]===$_REQUEST['passwd']){
        return false;
    } else {
        return true;
    }
}

function fechaVacio($name){
    if (empty($_REQUEST[$name])) {
        return true;
    } else {
        return false;
    }
}

function validaFecha($name){
    $exp = '/(\d{1,2})(\/)(\d{1,2})(\/)(\d{2,4})/';
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function validaEdad($name){
    list($dia,$mes,$anno) = explode("/",$_REQUEST[$name]);
    $fecha = strtotime($mes."/".$dia."/".$anno);
    $fecha = new Datetime($anno.'-'.$mes.'-'.$dia);
    $hoy = new Datetime();
    $edad = $fecha->diff($hoy)->y;
    if($edad>=18){
        return false;
    } else {
        return true;
    }
}

function validaDNI($name){
    $arrayLetras = array("T","R","W","A","G","M","Y","F","P","D","X","B","N",
    "J","Z","S","Q","V","H","L","C","K");
    $dni_length = strlen((string)$_REQUEST[$name]);
    if ($dni_length == 9) {
        list($dni,$letraDNI) = str_split($_REQUEST[$name], 8);
        if (is_numeric($dni)) {
            $letra = $dni%23;
            if($letraDNI == $arrayLetras[$letra]){
                return false;
            } else {
                return true;
            }
            
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function validaEmail($name){
    $exp = "/^.+@.+\..{2,}$/";
    if(preg_match($exp, $_REQUEST[$name])){
        return false;
    } else {
        return true;
    };
}

function formatoFichero(){
    list($tipo,$formato) = explode("/",$_FILES['fichero']['type']);
    if($formato=='jpg' || $formato=='jpeg' || $formato=='png' || $formato=='bmp'){
        return false;
    } else {
        return true;
    }
}

function ficheroVacio($name){
    if(isset($_FILES)){
        if(count($_FILES)!=0){
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }  
}

function recuerda($name){
    if(enviado() && !empty($_REQUEST[$name])){
        echo $_REQUEST[$name];
    }
    if (isset($_REQUEST['Borrar'])) {
        echo '';
    }
}










function errores($errores,$name){
    if(isset ($errores[$name]))
        echo $errores[$name];
}

function validaFormulario(&$errores){
    if(textVacio('nombre')){
        $errores['nombre'] = "Nombre vacío";
    }
    if(validaNombre('nombre')){
        $errores['valNombre'] = "Mínimo 3 caracteres";
    }
    if(textVacio('apellidos')){
        $errores['apellidos'] = "Apellidos vacíos";
    }
    if(validaNombre('apellidos')){
        $errores['valApellidos'] = "Mínimo 3 caracteres para el primer apellido, un
        espacio y mínimo 3 caracteres el segundo";
    }
    // if(textVacio('passwd')){
    //     $errores['passwd'] = "Debe introducir una contraseña";
    // }
    if(validaPasswd('passwd')){
        $errores['valPasswd'] = "Al menos 1 Mayúscula, 1 minúscula y 1 número";
    }
    if(validaPasswdRepetido('rePasswd')){
        $errores['valRePasswd'] = "No coincide con la contraseña que has introducido anteriormente";
    }
    if(fechaVacio('fecha')){
        $errores['fechaVacio'] = "Fecha vacía";
    } else {
        if(validaFecha('fecha')){
            $errores['valFecha'] = "Formato incorrecto";
        }
        if(validaEdad('fecha')){
            $errores['edad'] = "Debe ser mayor de edad";
        }
    }
    if(validaDNI('dni')){
        $errores['dni'] = "DNI inválido";
    }
    if(validaEmail('email')){
        $errores['email'] = "Email incorrecto";
    }
    if(ficheroVacio('fichero')){
        $errores['fichero'] = "Fichero vacío";
    } else {
        if(formatoFichero()){
            $errores['foto'] = "Formato de archivo no permitido";
        }
    }
    
    if (count($errores)==0)
        return true;
    else
        return false;
}
