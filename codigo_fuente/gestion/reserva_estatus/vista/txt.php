<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
reserva_estatus_id : %reserva_estatus_id%
reserva_estatus_codigo : %reserva_estatus_codigo%
reserva_estatus_estatus : %reserva_estatus_estatus%
reserva_estatus_orden : %reserva_estatus_orden%
";

                include "./reserva_estatus/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>