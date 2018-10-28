<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
parkings_id : %parkings_id%
parkings_id_contacto : %parkings_id_contacto%
parkings_direccion : %parkings_direccion%
parkings_numero : %parkings_numero%
parkings_cpostal : %parkings_cpostal%
parkings_barrio : %parkings_barrio%
parkings_comuna : %parkings_comuna%
parkings_ciudad : %parkings_ciudad%
parkings_pais : %parkings_pais%
parkings_precio_hora : %parkings_precio_hora%
parkings_orden : %parkings_orden%
parkings_estatus : %parkings_estatus%
";

                include "./parkings/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>