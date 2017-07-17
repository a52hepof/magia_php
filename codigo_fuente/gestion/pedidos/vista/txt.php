<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
pedidos_id : %pedidos_id%
pedidos_ref : %pedidos_ref%
pedidos_empresa : %pedidos_empresa%
pedidos_contacto : %pedidos_contacto%
pedidos_email : %pedidos_email%
pedidos_descripcion : %pedidos_descripcion%
pedidos_fecha : %pedidos_fecha%
pedidos_notas : %pedidos_notas%
pedidos_estatus : %pedidos_estatus%
";

                include "./pedidos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>