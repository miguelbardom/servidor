<?

if (file_exists('juegos.xml')) {
    $xml = simplexml_load_file('juegos.xml');
    echo "<pre>";
    //print_r($xml);
    foreach ($xml as $elemento) {
        //leerElemento($elemento);
    }
} else {
    exit('Error abriendo juegos.xml.');
}

function leerElemento($elemento)
{
    foreach ($elemento->children() as $a) {
        echo $a;
    }
    // echo $elemento->children()[0];
    // echo $elemento->children()[1];
    // echo $elemento->children()->count();
}

function leerAtributos($elemento)
{
    foreach ($elemento->attributes() as $a) {
        echo "<td>";
        echo $a;
        echo "</td>";
    }
}

function leerContenido($elemento){

    foreach ($elemento->children() as $a) {
        echo "<ul>";
        foreach ($a as $value) {
            echo "<li>";
            echo $value;
            echo "</li>";
        }
        echo "</ul>";
    }
}

?>


<table border="1">
    <h2>juegos.xml</h2>
    <thead>
        <th>Nombre</th>
        <th>ID</th>
        <th>Disponible</th>
        <th colspan="2">Dispositivos</th>
    </thead>
    <tbody>
        <?
        if (file_exists('juegos.xml')) {
            $xml = simplexml_load_file('juegos.xml');
            foreach ($xml as $elemento) {
                echo "<tr>";
                echo "<td>";
                leerElemento($elemento);
                echo "</td>";
                leerAtributos($elemento);
                echo "<td>";
                leerContenido($elemento);
                echo "</td>";
            }
        } else {
            exit('Error abriendo juegos.xml.');
        }
        ?>
    </tbody>
</table>