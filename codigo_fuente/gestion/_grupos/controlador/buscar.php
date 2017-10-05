 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "_grupos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     include "./_grupos/reg/get.php"; 
     include "./_grupos/modelos/buscar.php"; 
     
     include "./_grupos/vista/index.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
