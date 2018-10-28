<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
reservaciones_id : %reservaciones_id%
reservaciones_id_parking : %reservaciones_id_parking%
reservaciones_placa : %reservaciones_placa%
reservaciones_fecha_i : %reservaciones_fecha_i%
reservaciones_hora_i : %reservaciones_hora_i%
reservaciones_id_estatus : %reservaciones_id_estatus%
";

                include "./reservaciones/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>