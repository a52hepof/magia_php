<?php

/**
 * 
 */
$pagina = "home";
$accion = "ver";
//$id_contacto 			= mysql_real_escape_string($_GET['id_contacto']);
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo) == true) {        
    
    incluir_modelo($pagina, 'index');
    
    //include "home/modelo/index.php";
    
    
    include "home/vista/index.php";
    
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
}