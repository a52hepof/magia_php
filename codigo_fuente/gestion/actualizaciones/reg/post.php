<?php 
 /**  
 magia_version: 0.0.8 
 **/
  
  //$actualizaciones_id = mysql_real_escape_string($_POST['actualizaciones_id']); 
    $actualizaciones_codigo = (isset($_POST['actualizaciones_codigo']))?mysql_real_escape_string($_POST['actualizaciones_codigo']):null;   
    $actualizaciones_requiere = (isset($_POST['actualizaciones_requiere']))?mysql_real_escape_string($_POST['actualizaciones_requiere']):null;   
    $actualizaciones_nombre = (isset($_POST['actualizaciones_nombre']))?mysql_real_escape_string($_POST['actualizaciones_nombre']):null;   
    $actualizaciones_descripcion = (isset($_POST['actualizaciones_descripcion']))?mysql_real_escape_string($_POST['actualizaciones_descripcion']):null;   
    $actualizaciones_ejecutar = (isset($_POST['actualizaciones_ejecutar']))?mysql_real_escape_string($_POST['actualizaciones_ejecutar']):null;   
    $actualizaciones_estatus = (isset($_POST['actualizaciones_estatus']))?mysql_real_escape_string($_POST['actualizaciones_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }