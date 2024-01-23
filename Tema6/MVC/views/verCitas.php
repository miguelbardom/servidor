<?
    if(isset($sms)){
        echo $sms;
    }
?>

<table>
    <thead>
        <th>Especialista</th>
        <th>Fecha</th>
        <?
            if(isAdmin() && $_REQUEST['Citas_verTodasCitas']){
                echo "<th>"."Paciente"."</t>";
            }
        ?>
        <th>Ver</th>
        <th>Cancelar</th>
    </thead>
    <tbody>
        <?
    if (isset($array_citas)) {

        foreach ($array_citas as $cita) {
            echo "<tr>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='id' value='".$cita->id."' >";
                echo "<td>".$cita->especialista."</td>";
                echo "<td>".$cita->fecha."</td>";
                if(isAdmin() && $_REQUEST['Citas_verTodasCitas']){
                    if(($_SESSION['usuario']->perfil) !== 'administrador'){
                        echo "<td>".$cita->paciente."</td>";
                    }
                }
                echo "<input type='submit' name='Cita_Ver' value='Ver' >";
                echo "<input type='submit' name='Cita_Cancelar' value='Cancelar' >";
                echo "</form>";
            echo "</tr>";
        }
    }
        ?>
    </tbody>
</table>

<form action="" method="post">
        <input type="button" value="Pedir Cita" id="cita_pedir" name="Cita_Pedir">
        <input type="button" value="Ver Anterior" id="cita_anterior" name="Cita_VerAnterior">
</form>

