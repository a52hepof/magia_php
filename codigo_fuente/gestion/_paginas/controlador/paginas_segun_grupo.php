 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "_paginas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     //include "./_paginas/reg/get.php";
     $_paginas_grupo = mysql_real_escape_string($_GET['_paginas_grupo']); 
     include "./_paginas/modelos/paginas_segun_grupo.php"; 
      
     include "./_paginas/vista/paginas_segun_grupo.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
