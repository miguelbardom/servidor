<?
    require('confApi.php');
    require('curl.php');
    
    if(isset($_REQUEST['insertar'])){
        $array = array('nombre' => $_REQUEST['nombre'], 
            'localidad' => $_REQUEST['localidad'], 
            'telefono' => $_REQUEST['telefono']);
        
        post('institutos', $array);
    }

?>


<h1>Insertar Instituto</h1>
<form action="" method="post">

    <br>
    <label for="nombre">Nombre:
        <input type="text" name="nombre" id="nombre">
    </label>
    <br>
    <label for="localidad">Localidad:
        <input type="text" name="localidad" id="localidad">
    </label>
    <br>
    <label for="telefono">Telefono:
        <input type="text" name="telefono" id="telefono">
    </label>
    <br>

    <input type="submit" value="Insertar" name="insertar">
</form>