 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "contactos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_contactos_id 		= mysql_real_escape_string($_REQUEST['contactos_id']);   
     include "./_contactos/modelos/ver.php"; 
     include "./_contactos/reg/reg.php"; 
     include "./_contactos/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
