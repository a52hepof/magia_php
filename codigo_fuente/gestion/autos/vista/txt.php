<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
autos_id : %autos_id%
autos_placa : %autos_placa%
autos_id_contacto : %autos_id_contacto%
autos_estatus : %autos_estatus%
";

                include "./autos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>