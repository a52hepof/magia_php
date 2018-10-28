<?php

/**
  magia_version: 0.0.11
 * */
$accion = "buscar";
$pagina = "reservaciones";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? mysql_real_escape_string($_REQUEST['pag']) * $cfg_limite_items_en_tablas : 0;
    // ordenamos por id por defecto 
    $ordenpor = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? mysql_real_escape_string($_REQUEST['ordenpor']) : 'id';
    //asc / desc 
    $orden = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? mysql_real_escape_string($_REQUEST['orden']) : 'ASC';



$reservaciones_id_parking = (isset($_REQUEST['reservaciones_id_parking'])) ? mysql_real_escape_string($_REQUEST['reservaciones_id_parking']) : null;
$reservaciones_placa = (isset($_REQUEST['reservaciones_placa'])) ? mysql_real_escape_string($_REQUEST['reservaciones_placa']) : null;
$reservaciones_fecha_i = (isset($_REQUEST['reservaciones_fecha_i'])) ? mysql_real_escape_string($_REQUEST['reservaciones_fecha_i']) : null;
$reservaciones_hora_i = (isset($_REQUEST['reservaciones_hora_i'])) ? mysql_real_escape_string($_REQUEST['reservaciones_hora_i']) : null;
$reservaciones_id_estatus = (isset($_REQUEST['reservaciones_id_estatus'])) ? mysql_real_escape_string($_REQUEST['reservaciones_id_estatus']) : null;






    include "./reservaciones/modelos/buscar.php";
    //include "./reservaciones/reg/reg.php";
    include "./reservaciones/vista/index.php";
    // esto es par el paginador     
    $total_items_por_pagina = $cfg_limite_items_en_tablas; // esto viene de la configuracion    
    $total_paginas = ceil($total_items / $cfg_limite_items_en_tablas);
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
