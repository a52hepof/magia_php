 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "parkings"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $parkings_id 		= mysql_real_escape_string($_REQUEST['parkings_id']);   
     include "./parkings/modelos/ver.php"; 
     include "./parkings/reg/reg.php"; 
     include "./parkings/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
