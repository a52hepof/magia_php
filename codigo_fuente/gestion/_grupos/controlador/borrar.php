 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "borrar"; 
 $pagina = "_grupos"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $_grupos_id 		= mysql_real_escape_string($_REQUEST['_grupos_id']); 
 include "./_grupos/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
