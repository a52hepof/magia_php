<?php

/**
  magia_version: 0.0.11
 * 
id_parking = '$reservaciones_id_parking'  
 ,  placa = '$reservaciones_placa'  
 ,  fecha_i = '$reservaciones_fecha_i'  
 ,  hora_i = '$reservaciones_hora_i'  
  */
$sql = mysql_query(" UPDATE reservaciones SET  
   id_estatus = '$reservaciones_id_estatus'  
 WHERE id = '$reservaciones_id' 
 ", $conexion) or error(__DIR__, __FILE__, __LINE__);


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql",
        "\$reservaciones_id" => "$reservaciones_id"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}