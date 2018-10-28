 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "reserva_estatus"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $reserva_estatus_id 		= mysql_real_escape_string($_REQUEST['reserva_estatus_id']); 
 include "./reserva_estatus/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
