<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "cambiar_idioma";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    
    if (isset($_REQUEST['a']) == 'editar') {
        
        $email      = mysql_real_escape_string($_REQUEST['email']);
        $idioma     = mysql_real_escape_string($_REQUEST['idioma']);
        
        include "./contactos/modelos/cambiar_idioma.php";
        

    } else {
        mensaje("info", 'Error');
    }
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
