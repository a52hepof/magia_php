<?php

/**
  magia_version: 0.0.11
 * */
$sql = mysql_query(" UPDATE parkings SET  
 id_contacto = '$parkings_id_contacto'  
 ,  direccion = '$parkings_direccion'  
 ,  numero = '$parkings_numero'  
 ,  cpostal = '$parkings_cpostal'  
 ,  barrio = '$parkings_barrio'  
 ,  comuna = '$parkings_comuna'  
 ,  ciudad = '$parkings_ciudad'  
 ,  pais = '$parkings_pais'  
 ,  precio_hora = '$parkings_precio_hora'  
 ,  orden = '$parkings_orden'  
 ,  estatus = '$parkings_estatus'  
 WHERE id = '$parkings_id' 
 ", $conexion) or error(__DIR__, __FILE__, __LINE__);


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql",
        "\$parkings_id" => "$parkings_id"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}