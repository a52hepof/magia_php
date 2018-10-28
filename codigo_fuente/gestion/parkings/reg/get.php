<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$parkings_id = mysql_real_escape_string($_GET['parkings_id']); 
    $parkings_id_contacto = (isset($_GET['parkings_id_contacto']))?mysql_real_escape_string($_GET['parkings_id_contacto']):null;   
    $parkings_direccion = (isset($_GET['parkings_direccion']))?mysql_real_escape_string($_GET['parkings_direccion']):null;   
    $parkings_numero = (isset($_GET['parkings_numero']))?mysql_real_escape_string($_GET['parkings_numero']):null;   
    $parkings_cpostal = (isset($_GET['parkings_cpostal']))?mysql_real_escape_string($_GET['parkings_cpostal']):null;   
    $parkings_barrio = (isset($_GET['parkings_barrio']))?mysql_real_escape_string($_GET['parkings_barrio']):null;   
    $parkings_comuna = (isset($_GET['parkings_comuna']))?mysql_real_escape_string($_GET['parkings_comuna']):null;   
    $parkings_ciudad = (isset($_GET['parkings_ciudad']))?mysql_real_escape_string($_GET['parkings_ciudad']):null;   
    $parkings_pais = (isset($_GET['parkings_pais']))?mysql_real_escape_string($_GET['parkings_pais']):null;   
    $parkings_precio_hora = (isset($_GET['parkings_precio_hora']))?mysql_real_escape_string($_GET['parkings_precio_hora']):0.0000000000;   
    $parkings_orden = (isset($_GET['parkings_orden']))?mysql_real_escape_string($_GET['parkings_orden']):null;   
    $parkings_estatus = (isset($_GET['parkings_estatus']))?mysql_real_escape_string($_GET['parkings_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }