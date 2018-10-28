 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "parkings"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $parkings_id 		= mysql_real_escape_string($_REQUEST['parkings_id']); 
 include "./parkings/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
