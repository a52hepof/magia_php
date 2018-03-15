 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "borrar"; 
 $pagina = "logs"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $logs_id 		= mysql_real_escape_string($_REQUEST['logs_id']); 
 include "./logs/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
