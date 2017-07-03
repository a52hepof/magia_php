 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "editar"; 
 $pagina = "_menu"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $_menu_id = mysql_real_escape_string($_REQUEST['_menu_id']);      
 include "./_menu/reg/post.php";  
 include "./_menu/modelos/editar.php";  

 include "./_menu/modelos/ver.php";  
 include "./_menu/reg/reg.php"; 
 include "./_menu/vista/ver.php";  
 }else{ 
 $_menu_id = mysql_real_escape_string($_REQUEST['_menu_id']);      
 include "./_menu/modelos/ver.php"; 
 include "./_menu/reg/reg.php"; 
 include "./_menu/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
