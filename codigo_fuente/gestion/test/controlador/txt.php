 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "test"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $test_id 		= mysql_real_escape_string($_REQUEST['test_id']);   
     include "./test/modelos/ver.php"; 
     include "./test/reg/reg.php"; 
     include "./test/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
