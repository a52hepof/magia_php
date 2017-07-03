 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "logs"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $logs_id 		= mysql_real_escape_string($_REQUEST['logs_id']);   
     include "./logs/modelos/var.php"; 
     $html = file_get_contents("./logs/vista/var.php"); 
     include "./logs/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
