<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas Clase Tema 2</title>
</head>
<body>
    <p>
        echo
    </p>
    <?
        echo "Hola Mundo";
        echo "<br>Hola Mundo","hola mundo";
        print "<br>hola con print";

        print "<br>";
        printf("%s","17,99");
        print "<br>";
        printf("%d","17,99");
        print "<br>";
        printf("%f","17.99");

        print "<br>Información de var_dump";
        print "<br>";
        var_dump("miguel");
        print "<br>";
        var_dump(3,"pepe");
        var_dump(3.5);

        print "<br>Tipos de variables<br>";
        $mivariable = 6;
        echo "Mi variable es $mivariable, es de tipo " . gettype($mivariable);
        print "<br>";
        $mivariable = 6.5;
        echo "Mi variable es $mivariable, es de tipo " . gettype($mivariable);

        print "<br>El raro del booleano<br>";
        $booleano = false;
        echo "Mi variable es $booleano, es de tipo " . gettype($booleano);
        print "<br>";
        var_dump($booleano);

        print "<br>";
        $micadena = "Hola";
        echo "Mi variable es $micadena, es de tipo " . gettype($micadena);

        print "<br>";
        $nulo = null;
        echo "Mi variable es $nulo, es de tipo " . gettype($nulo);

        print "<br>";
        $micadena = "Hola";
        echo "Mi variable es $micadena, es de tipo " . gettype($micadena);

        $cadena = "a se escribe con comillas \"a\"";
        print "<br>";
        echo $cadena;

        $heredoc = <<< TEXT
        Escribo todo lo que quiero <p> con "comillas" </p>
        TEXT;
        echo $heredoc;

        $var = 0x2A;
        echo $var;
        print "<br>";
        $var = 8.13e-1;
        echo $var;

        echo "<h2>Conversión de tipos</h2>";
        $a = 4;
        $b = 4.5;
        $c = "maria";
        $d = true;
        $e = null;
        echo "<br>";
        $r = $a+$b;
        echo "Mi variable es $a + $b es $r de tipo " . gettype($r);
        echo "<br>";
        $r = $a.$c;
        echo "Mi variable es $a + $c es $r de tipo " . gettype($r);
        echo "<br>";
        $r = $a+$d;
        echo "Mi variable es $a + $d es $r de tipo " . gettype($r);
        echo "<br>";
        $r = $a+$e;
        echo "Mi variable es $a + $e es $r de tipo " . gettype($r);
        echo "<br>";
        $r = $a.$e;
        echo "Mi variable es $a + $e es $r de tipo " . gettype($r);
        
        echo "<br>";
        $r = $a+(int)$b;
        echo "Mi variable es $a + $b es $r de tipo " . gettype($r);

        echo "<h2>Variable de variable</h2>";

        $alumno1 = "miguel";
        $alumno2 = "fernando";
        $alumno3 = "georgi";
        $alumno4 = "raul";
        
        $elegido = "alumno".random_int(1,4);

        echo $$elegido;
        echo "<br>";



    ?>
    <a href="mipagina.php?nombre=maria&nombre2=pepe">Mi página</a>
</body>
</html>