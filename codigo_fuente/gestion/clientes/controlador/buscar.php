<?php

/**
  magia_version: 0.0.8
 * */
$accion = "buscar";
$pagina = "clientes";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {

    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    $b = (isset($_REQUEST['b'])) ? mysql_real_escape_string(trim($_REQUEST['b'])) : false;

        // ordenamos por id por defecto 
    $ordenpor   = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? $_REQUEST['ordenpor']  : 'id';
    //asc / desc
    $orden   = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? $_REQUEST['orden']  : 'ASC';
    
    include "./clientes/modelos/buscar.php";

    include "./clientes/vista/index.php";
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 