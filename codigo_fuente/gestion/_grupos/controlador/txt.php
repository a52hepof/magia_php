 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_grupos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_grupos_id 		= mysql_real_escape_string($_REQUEST['_grupos_id']);   
     include "./_grupos/modelos/ver.php"; 
     include "./_grupos/reg/reg.php"; 
     include "./_grupos/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
