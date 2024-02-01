<?

    require('confApi.php');
    require('curl.php');

    if(isset($_REQUEST['modificar'])){
        $array = [];
        if(!empty($_REQUEST['nombre'])){
            $array['nombre'] = $_REQUEST['nombre'];
        }
        if(!empty($_REQUEST['localidad'])){
            $array['localidad'] = $_REQUEST['localidad'];
        }
        if(!empty($_REQUEST['telefono'])){
            $array['telefono'] = $_REQUEST['telefono'];
        }
        put("institutos",1,$array);
    }
 
?>

<h1>Modificar Instituto</h1>
<form action="" method="post">
    <label for="nombre">Nombre: <input type="text" name="nombre" id="nombre"></label><br>
    <label for="localidad">Localidad: <input type="text" name="localidad" id="localidad"></label><br>
    <label for="telefono">Telefono: <input type="number" name="telefono" id="telefono"></label><br>
    <input type="submit" name="modificar" id="modificar" value="Modificar">
</form>