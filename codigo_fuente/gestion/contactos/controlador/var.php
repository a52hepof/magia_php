 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "contactos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $contactos_id 		= mysql_real_escape_string($_REQUEST['contactos_id']);   
     include "./contactos/modelos/var.php"; 
     $html = file_get_contents("./contactos/vista/var.php"); 
     include "./contactos/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
