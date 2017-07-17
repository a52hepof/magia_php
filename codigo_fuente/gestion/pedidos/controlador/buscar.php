<?php

/**
  magia_version: 0.0.8
 * */
$accion = "buscar";
$pagina = "pedidos";

if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $pedidos_id = mysql_real_escape_string($_GET['pedidos_id']);

   // include "./pedidos/reg/get.php";
    

$pedidos_ref =          (isset($_GET['pedidos_ref']))? mysql_real_escape_string(trim($_GET['pedidos_ref'])): ""; 
// email va primero para poder calcular los otros datos del contacto
$pedidos_empresa =        (isset($_GET['pedidos_empresa']))? mysql_real_escape_string(trim($_GET['pedidos_empresa'])): ""; 
$pedidos_email =        (isset($_GET['pedidos_email']))? mysql_real_escape_string(trim($_GET['pedidos_email'])): ""; 
$pedidos_contacto =        (isset($_GET['pedidos_contacto']))? mysql_real_escape_string(trim($_GET['pedidos_contacto'])): ""; 

$pedidos_fecha =        (isset($_GET['pedidos_fecha']))? mysql_real_escape_string(trim($_GET['pedidos_fecha'])): ""; 
$pedidos_notas =        (isset($_GET['pedidos_notas']))? mysql_real_escape_string(trim($_GET['pedidos_notas'])): ""; 
$pedidos_estatus =      (isset($_GET['pedidos_estatus']))? mysql_real_escape_string(trim($_GET['pedidos_estatus'])): ""; 





    if ( permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {
        include "./pedidos/modelos/buscar.php";
    } else {
        include "./pedidos/modelos/buscar_solo_mios.php";
    }



    include "./pedidos/vista/buscar.php";
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
