 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "buscar"; 
 $pagina = "reserva_estatus"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? mysql_real_escape_string($_REQUEST['pag']) * $cfg_limite_items_en_tablas : 0; 
     // ordenamos por id por defecto 
     $ordenpor   = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? mysql_real_escape_string($_REQUEST['ordenpor'])  : 'id'; 
     //asc / desc 
     $orden   = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? mysql_real_escape_string($_REQUEST['orden'])  : 'ASC'; 
     include "./reserva_estatus/modelos/buscar.php"; 
     include "./reserva_estatus/reg/reg.php"; 
     include "./reserva_estatus/reg/index.php"; 
 // esto es par el paginador     
 $total_items_por_pagina = $cfg_limite_items_en_tablas; // esto viene de la configuracion    
 $total_paginas = ceil($total_items / $cfg_limite_items_en_tablas);    
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
