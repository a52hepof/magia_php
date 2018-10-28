 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "reserva_estatus"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $reserva_estatus_id 		= mysql_real_escape_string($_REQUEST['reserva_estatus_id']);   
     include "./reserva_estatus/modelos/ver.php"; 
     include "./reserva_estatus/reg/reg.php"; 
     include "./reserva_estatus/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
