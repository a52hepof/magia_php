<?php

/**
  magia_version: 0.0.11
 * */
//$autos_id = mysql_real_escape_string($_GET['autos_id']); 
$autos_placa = (isset($_GET['autos_placa'])) ? mysql_real_escape_string($_GET['autos_placa']) : null;
$autos_id_contacto = (isset($_GET['autos_id_contacto'])) ? mysql_real_escape_string($_GET['autos_id_contacto']) : null;
$autos_estatus = (isset($_GET['autos_estatus'])) ? mysql_real_escape_string($_GET['autos_estatus']) : null;

if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($_GET as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}