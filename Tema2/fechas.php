<?php

 echo time();
 echo "<p>Zona que tiene el servidor</p>";
 echo date_default_timezone_get();

 date_default_timezone_set("Europe/Madrid");
 echo date_default_timezone_get();
 echo "<p>Cambiada</p>";
 
 echo date("r");
 echo "<br>";
 echo date("d/m/y H:i:s");

 echo "<p>String to fecha</p>";
 $cumpleGeorgi = strtotime("08/21/1998");
 echo $cumpleGeorgi;
 echo "<p>".date("d/m/y",$cumpleGeorgi)."</p>";
 $hoy = strtotime("now");
 echo "<p>".date("d/m/y",$hoy)."</p>";

 $tiempoRestado = $hoy - $cumpleGeorgi;
 echo "<p>".date("d/m/y",$tiempoRestado)."</p>";
 echo "Años: ".((($tiempoRestado/60)/60)/24)/365;

 $cumpleGeorgi = new Datetime('1998-08-21');
 $hoy = new Datetime();
 $intervalo = $cumpleGeorgi->diff($hoy);
 echo "<pre>";
 print_r($intervalo);
 echo "</pre>";

 //funciones datetime, maketime, getdate





?>