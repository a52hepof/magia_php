 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "_traducciones"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     include "./_traducciones/modelos/buscar.php"; 
     include "./_traducciones/reg/reg.php"; 
     include "./_traducciones/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 