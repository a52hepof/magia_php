 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "pedidos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $pedidos_id 		= mysql_real_escape_string($_REQUEST['pedidos_id']);   
     include "./pedidos/modelos/var.php"; 
     $html = file_get_contents("./pedidos/vista/var.php"); 
     include "./pedidos/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
