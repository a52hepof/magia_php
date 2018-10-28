 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "autos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $autos_id 		= mysql_real_escape_string($_REQUEST['autos_id']);   
     include "./autos/modelos/ver.php"; 
     include "./autos/reg/reg.php"; 
     include "./autos/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
