 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "borrar"; 
 $pagina = "test"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $test_id 		= mysql_real_escape_string($_REQUEST['test_id']); 
 include "./test/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
