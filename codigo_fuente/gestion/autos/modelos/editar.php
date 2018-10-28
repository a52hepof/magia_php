<?php

/**
  magia_version: 0.0.11
 * */
$sql = mysql_query(" UPDATE autos SET  
 placa = '$autos_placa'  
 ,  id_contacto = '$autos_id_contacto'  
 ,  estatus = '$autos_estatus'  
 WHERE id = '$autos_id' 
     
 ", $conexion) or error(__DIR__, __FILE__, __LINE__);


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql",
        "\$autos_id" => "$autos_id"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}