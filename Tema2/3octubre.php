<pre>
<?php

print_r($_SERVER);


?>
</pre>

<?php
 echo "<h1>Ámbito de las variables</h1>";
 $contador = 5;

 function pruebaVariable(){
    echo $contador;
 }

 function pruebaVariableParametro($contador){
    echo $contador; "<br>";
    $contador++;
    echo $contador;
 }

 function pruebaVariableReferencia(&$contador){
    echo $contador; "<br>";
    $contador++;
    echo $contador;
 }

 function pruebaVariableGlobal(){
    global $contador;
    echo $contador . "<br>";
    $contador++;
    echo $contador;
 }

 echo "<p>No puede acceder</p>";
 pruebaVariable();
 echo "<p>Pasado como parámetro</p>";
 pruebaVariableParametro($contador);
 echo "<p>Qué le pasa a contador?</p>";
 echo $contador;

 echo "<p>Pasado como parámetro por referencia</p>";
 pruebaVariableReferencia($contador);
 echo "<p>Qué le pasa a contador?</p>";
 echo $contador;

 echo "<p>Sin parámetro pero llama a la variable global</p>";
 pruebaVariableGlobal($contador);
 echo "<p>Qué le pasa a contador?</p>";
 echo $contador;
 echo "<br>";

 function contador(){
    static $c = 0;
    $c++;
    echo "<br>" .$c;
 }


 contador();
 contador();
 contador();
 contador();
 contador();
 echo "<br>";

 define("USER","Miguel");  //es una constante
 echo USER;

 echo "<a href='./vercodigo.php'>Ver código</a>";