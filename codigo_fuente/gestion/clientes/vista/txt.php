<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
clientes_id : %clientes_id%
clientes_idioma : %clientes_idioma%
clientes_tipo_documento : %clientes_tipo_documento%
clientes_ruc_prefijo : %clientes_ruc_prefijo%
clientes_numero_documento : %clientes_numero_documento%
clientes_empresa : %clientes_empresa%
clientes_cliente : %clientes_cliente%
clientes_saludo : %clientes_saludo%
clientes_direccion : %clientes_direccion%
clientes_cpostal : %clientes_cpostal%
clientes_ciudad : %clientes_ciudad%
clientes_provincia : %clientes_provincia%
clientes_pais : %clientes_pais%
clientes_tel : %clientes_tel%
clientes_fax : %clientes_fax%
clientes_email : %clientes_email%
clientes_notas : %clientes_notas%
clientes_tipo : %clientes_tipo%
clientes_fecha_registro : %clientes_fecha_registro%
clientes_es_cliente : %clientes_es_cliente%
clientes_estrellas : %clientes_estrellas%
clientes_estatus : %clientes_estatus%
";

                include "./clientes/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>