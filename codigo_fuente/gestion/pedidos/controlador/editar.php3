<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "pedidos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $pedidos_id = mysql_real_escape_string($_REQUEST['pedidos_id']);
        include "./pedidos/reg/post.php";

        if ($pedidos_email == $_usuarios_usuario || permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {
            include "./pedidos/modelos/editar.php";
                        
            include "./pedidos/modelos/ver.php";
            include "./pedidos/reg/reg.php";
            include "./pedidos/vista/ver.php";
        } else {
            mensaje("info", "Pedido no le pertenece");
        }
    } else {
        $pedidos_id = mysql_real_escape_string($_REQUEST['pedidos_id']);
        include "./pedidos/modelos/ver.php";
        include "./pedidos/reg/reg.php";

        if ($pedidos_email == $_usuarios_usuario || permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {
            
            
            include "./pedidos/vista/editar.php";
        } else {
            mensaje("info", "Pedido no le pertenece");
        }
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
