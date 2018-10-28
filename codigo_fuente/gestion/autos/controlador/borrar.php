 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "autos"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $autos_id 		= mysql_real_escape_string($_REQUEST['autos_id']); 
 include "./autos/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
