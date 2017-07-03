 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "logs"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $logs_id 		= mysql_real_escape_string($_REQUEST['logs_id']);   
     include "./logs/modelos/ver.php"; 
     include "./logs/reg/reg.php"; 
     include "./logs/vista/ver.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
