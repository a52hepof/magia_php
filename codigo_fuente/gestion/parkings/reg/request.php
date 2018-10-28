<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $parkings_id = (isset($_REQUEST['parkings_id']))?mysql_real_escape_string($_REQUEST['parkings_id']):null;   
    $parkings_id_contacto = (isset($_REQUEST['parkings_id_contacto']))?mysql_real_escape_string($_REQUEST['parkings_id_contacto']):null;   
    $parkings_direccion = (isset($_REQUEST['parkings_direccion']))?mysql_real_escape_string($_REQUEST['parkings_direccion']):null;   
    $parkings_numero = (isset($_REQUEST['parkings_numero']))?mysql_real_escape_string($_REQUEST['parkings_numero']):null;   
    $parkings_cpostal = (isset($_REQUEST['parkings_cpostal']))?mysql_real_escape_string($_REQUEST['parkings_cpostal']):null;   
    $parkings_barrio = (isset($_REQUEST['parkings_barrio']))?mysql_real_escape_string($_REQUEST['parkings_barrio']):null;   
    $parkings_comuna = (isset($_REQUEST['parkings_comuna']))?mysql_real_escape_string($_REQUEST['parkings_comuna']):null;   
    $parkings_ciudad = (isset($_REQUEST['parkings_ciudad']))?mysql_real_escape_string($_REQUEST['parkings_ciudad']):null;   
    $parkings_pais = (isset($_REQUEST['parkings_pais']))?mysql_real_escape_string($_REQUEST['parkings_pais']):null;   
    $parkings_precio_hora = (isset($_REQUEST['parkings_precio_hora']))?mysql_real_escape_string($_REQUEST['parkings_precio_hora']):0.0000000000;   
    $parkings_orden = (isset($_REQUEST['parkings_orden']))?mysql_real_escape_string($_REQUEST['parkings_orden']):null;   
    $parkings_estatus = (isset($_REQUEST['parkings_estatus']))?mysql_real_escape_string($_REQUEST['parkings_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }