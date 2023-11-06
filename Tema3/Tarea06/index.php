<?php
//$liga["Zamora"]["Salamanca"]["Resultado"]="3-2";
$liga =
array(
    "Zamora" =>  array(
        "Salamanca" => array(
            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
        ),
        "Avila" => array(
            "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
        ),
        "Valladolid" => array(
            "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1
        )
    ),
    "Salamanca" =>  array(
        "Zamora" => array(
            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
        ),
        "Avila" => array(
            "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
        ),
        "Valladolid" => array(
            "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 2, "Penalti" => 1
        )
    ),
    "Avila" =>  array(
        "Zamora" => array(
            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 2
        ),
        "Salamanca" => array(
            "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 3, "Penalti" => 0
        ),
        "Valladolid" => array(
            "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 0, "Penalti" => 1
        )
    ),
    "Valladolid" =>  array(
        "Zamora" => array(
            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
        ),
        "Salamanca" => array(
            "Resultado" => "3-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
        ),
        "Avila" => array(
            "Resultado" => "1-1", "Roja" => 1, "Amarilla" => 1, "Penalti" => 2
        )
    ),
);

?>


<table border ="1">
    <thead>
        <?php
            echo "<th>Equipos</th>";
            $clas = array();
            echo "<th>Puntos</th>";
            echo "<th>Goles a favor</th>";
            echo "<th>Goles en contra</th>";
        ?>
    </thead>
    <tbody>
        <?php
            foreach ($liga as $local => $partidos) {
                foreach ($partidos as $rival => $partido) {
                    print_r($partido);
                    $resul = explode("-",$partido["Resultado"]);
                    print_r($resul);
                    if ($resul[0] > $resul[1]) {
                        if (isset($clas[$local]["Puntos"])) {
                            $clas[$local]["Puntos"] += 3;
                        } else {
                            $clas[$local]["Puntos"] = 3;
                        }
                    } elseif ($resul[0] < $resul[1]) {
                        if (isset($clas[$rival]["Puntos"])) {
                            $clas[$rival]["Puntos"] += 3;
                        } else {
                            $clas[$rival]["Puntos"] = 3;
                        }
                    } else {
                        if (isset($clas[$local]["Puntos"])) {
                            $clas[$local]["Puntos"] += 1;
                        } else {
                            $clas[$local]["Puntos"] = 1;
                        }
                        if (isset($clas[$rival]["Puntos"])) {
                            $clas[$rival]["Puntos"] += 1;
                        } else {
                            $clas[$rival]["Puntos"] = 1;
                        }
                    }
                    if (isset($clas[$local]["Goles a favor"])) {
                        $clas[$local]["Goles a favor"] += $resul[0];
                    } else {
                        $clas[$local]["Goles a favor"] = $resul[0];
                    }
                    if (isset($clas[$rival]["Goles a favor"])) {
                        $clas[$rival]["Goles a favor"] += $resul[1];
                    } else {
                        $clas[$rival]["Goles a favor"] = $resul[1];
                    }
                    if (isset($clas[$local]["Goles en contra"])) {
                        $clas[$local]["Goles en contra"] += $resul[0];
                    } else {
                        $clas[$local]["Goles en contra"] = $resul[0];
                    }
                    if (isset($clas[$rival]["Goles en contra"])) {
                        $clas[$rival]["Goles en contra"] += $resul[1];
                    } else {
                        $clas[$rival]["Goles en contra"] = $resul[1];
                    }
                }
                echo "<tr>";
                echo "<th>$local</th>";
                echo "<th>".$clas[$local]["Puntos"]."</th>";
                echo "<th>".$clas[$local]["Goles a favor"]."</th>";
                echo "<th>".$clas[$local]["Goles en contra"]."</th>";
                echo "</tr>";
            }
            
        ?>    
    </tbody>
</table>
