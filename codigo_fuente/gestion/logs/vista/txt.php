<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
logs_id : %logs_id%
logs_fecha : %logs_fecha%
logs_usuario : %logs_usuario%
logs_p : %logs_p%
logs_c : %logs_c%
logs_a : %logs_a%
logs_id_pedido : %logs_id_pedido%
logs_argumento : %logs_argumento%
";

                include "./logs/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>