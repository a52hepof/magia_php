<?php

// muestra la lista de pedidos, 
// La pagina: pedidos_otros permite de ver pedidos que no me pertenecen
// esto esta reservado para los admin y root 
//
$accion = "ver";
$pagina = "pedidos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {

    // si puede ver pedidos otros esto, sino
    if (permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {
        $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;        
        $estatus = mysql_real_escape_string($_REQUEST['estatus']);
    include "./pedidos/modelos/buscar_segun_estatus_todos.php";        

    } else {
        // solo los suyos
        $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
        $estatus = mysql_real_escape_string($_REQUEST['estatus']);
    include "./pedidos/modelos/buscar_segun_estatus_mios.php";    

    }
        
        include "./pedidos/vista/index.php";
    
    
    
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
