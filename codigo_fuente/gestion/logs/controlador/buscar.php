 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "logs"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
       $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;  
     include "./logs/reg/get.php"; 
     include "./logs/modelos/buscar.php"; 
     include "./logs/vista/index.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
