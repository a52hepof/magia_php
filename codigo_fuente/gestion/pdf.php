<?php

session_start("magia_php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "z_verificar.php";
include "../admin/bd.php";
include "../admin/configuracion.php";
include "../admin/coneccion.php";
include "../admin/conec.php";
include "../admin/funciones.php";
include "../admin/funciones_sql.php";
include "../admin/getbootstrap.php";
include "../admin/permisos.php";
include "../admin/traductor.php";
include "../admin/contenido.php";
include "../admin/formularios.php";
include "../admin/menu.php";
include "../admin/paginacion.php";
require "../includes/pdml/pdml.php";
_incluir_funciones();
$aqui_seccion = "";
$aqui_pagina = "";

$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : "home";
$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : "pdf";
// para las paginaciones de todas las paginas
//$pag = (isset($_REQUEST['pag'])) ? $_REQUEST['pag'] : 0;

include './' . $p . '/controlador/' . $c . '.php';
