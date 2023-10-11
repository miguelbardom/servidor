<?php

//$lado = $_GET['lado'];
$lado = 4;

$array = array();

for ($i=0; $i < $lado; $i++) { 
    
    $array[$i] = array();

    for ($j=0; $j < $lado; $j++) { 
        
        if ($i==0 || $j==0) {
            $array[$i][$j] = 1;
        } else {
            $array[$i][$j] = $array[$i-1][$j] + $array[$i][$j-1];
        }
    }

}

print_r($array);
echo "<br>";

?>
<br>
<table border="1">
    <thead>
        <?php
            echo "<th>Tabla</th>";
            foreach ($array as $key => $value) {
                echo "<th>$key</th>";
            }    
        ?>
    </thead>
    <tbody>
        <?php
            foreach ($array as $key => $value) {
                echo "<tr>";
                    echo "<th>$key</th>";
                    foreach ($value as $resultado) {
                        echo "<td>$resultado</td>";
                    }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>