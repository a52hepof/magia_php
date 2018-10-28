<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$parkings_id = mysql_real_escape_string($_POST['parkings_id']); 
    $parkings_id_contacto = (isset($_POST['parkings_id_contacto']))?mysql_real_escape_string($_POST['parkings_id_contacto']):null;   
    $parkings_direccion = (isset($_POST['parkings_direccion']))?mysql_real_escape_string($_POST['parkings_direccion']):null;   
    $parkings_numero = (isset($_POST['parkings_numero']))?mysql_real_escape_string($_POST['parkings_numero']):null;   
    $parkings_cpostal = (isset($_POST['parkings_cpostal']))?mysql_real_escape_string($_POST['parkings_cpostal']):null;   
    $parkings_barrio = (isset($_POST['parkings_barrio']))?mysql_real_escape_string($_POST['parkings_barrio']):null;   
    $parkings_comuna = (isset($_POST['parkings_comuna']))?mysql_real_escape_string($_POST['parkings_comuna']):null;   
    $parkings_ciudad = (isset($_POST['parkings_ciudad']))?mysql_real_escape_string($_POST['parkings_ciudad']):null;   
    $parkings_pais = (isset($_POST['parkings_pais']))?mysql_real_escape_string($_POST['parkings_pais']):null;   
    $parkings_precio_hora = (isset($_POST['parkings_precio_hora']))?mysql_real_escape_string($_POST['parkings_precio_hora']):0.0000000000;   
    $parkings_orden = (isset($_POST['parkings_orden']))?mysql_real_escape_string($_POST['parkings_orden']):null;   
    $parkings_estatus = (isset($_POST['parkings_estatus']))?mysql_real_escape_string($_POST['parkings_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }