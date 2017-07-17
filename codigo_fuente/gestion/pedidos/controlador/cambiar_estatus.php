<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "pedidos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'cambiar_estatus') {
        
        $pedidos_id = mysql_real_escape_string($_REQUEST['pedidos_id']);
        $pedidos_email = pedidos_campo('email', $pedidos_id);

        if ($pedidos_email == $_usuarios_usuario || permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {           
            $estatus = mysql_real_escape_string($_REQUEST['estatus']);            
            include "./pedidos/modelos/cambiar_estatus.php";
            echo '<meta http-equiv="refresh" content="0; url=index.php?p=pedidos">'; 
            } else {
            mensaje("info", "No le pertenece");
        }
    } 
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
