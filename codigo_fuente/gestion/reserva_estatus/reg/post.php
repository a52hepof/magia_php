<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$reserva_estatus_id = mysql_real_escape_string($_POST['reserva_estatus_id']); 
    $reserva_estatus_codigo = (isset($_POST['reserva_estatus_codigo']))?mysql_real_escape_string($_POST['reserva_estatus_codigo']):null;   
    $reserva_estatus_estatus = (isset($_POST['reserva_estatus_estatus']))?mysql_real_escape_string($_POST['reserva_estatus_estatus']):null;   
    $reserva_estatus_orden = (isset($_POST['reserva_estatus_orden']))?mysql_real_escape_string($_POST['reserva_estatus_orden']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }