<?php

/**
  magia_version: 0.0.8
 * */
$accion = "borrar";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $_contactos_email = mysql_real_escape_string($_REQUEST['contactos_email']);
    include "./_contactos/modelos/borrar.php";
    
    if(!contactos_campo_segun_email('id', $_contactos_email)){
        mensaje('info', 'Borrado!');
    }else{
        mensaje('atencion', 'No se pudo borrar este usuario');
    }
    
    
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
