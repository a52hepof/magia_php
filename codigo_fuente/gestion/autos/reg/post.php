<?php

/**
  magia_version: 0.0.11
 * */
//$autos_id = mysql_real_escape_string($_POST['autos_id']); 
$autos_placa = (isset($_POST['autos_placa'])) ? mysql_real_escape_string($_POST['autos_placa']) : null;
$autos_id_contacto = (isset($_POST['autos_id_contacto'])) ? mysql_real_escape_string($_POST['autos_id_contacto']) : null;
$autos_estatus = (isset($_POST['autos_estatus'])) ? mysql_real_escape_string($_POST['autos_estatus']) : 0;

if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($_POST as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}