 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "pedidos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $pedidos_id 		= mysql_real_escape_string($_REQUEST['pedidos_id']);   
     include "./pedidos/modelos/ver.php"; 
     include "./pedidos/reg/reg.php"; 
     include "./pedidos/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
