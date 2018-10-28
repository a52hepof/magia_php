 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "reservaciones"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $reservaciones_id 		= mysql_real_escape_string($_REQUEST['reservaciones_id']); 
 include "./reservaciones/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
