 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "borrar"; 
 $pagina = "clientes"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $clientes_id 		= mysql_real_escape_string($_REQUEST['clientes_id']); 
 include "./clientes/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
