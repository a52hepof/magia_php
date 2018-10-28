 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "_paginas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     include "./_paginas/reg/get.php";
     include "./_paginas/modelos/buscar.php"; 
      
     include "./_paginas/vista/index.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
