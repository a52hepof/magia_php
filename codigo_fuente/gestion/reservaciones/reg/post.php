<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$reservaciones_id = mysql_real_escape_string($_POST['reservaciones_id']); 
    $reservaciones_id_parking = (isset($_POST['reservaciones_id_parking']))?mysql_real_escape_string($_POST['reservaciones_id_parking']):null;   
    $reservaciones_placa = (isset($_POST['reservaciones_placa']))?mysql_real_escape_string($_POST['reservaciones_placa']):null;   
    $reservaciones_fecha_i = (isset($_POST['reservaciones_fecha_i']))?mysql_real_escape_string($_POST['reservaciones_fecha_i']):null;   
    $reservaciones_hora_i = (isset($_POST['reservaciones_hora_i']))?mysql_real_escape_string($_POST['reservaciones_hora_i']):null;   
    $reservaciones_id_estatus = (isset($_POST['reservaciones_id_estatus']))?mysql_real_escape_string($_POST['reservaciones_id_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }