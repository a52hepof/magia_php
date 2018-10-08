<?php
// para mostrar los errores
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "./admin/bd.php";
include "./admin/bd_funciones.php";
include "./admin/config.php";
include "./admin/conec.php";
include "./admin/coneccion.php";
include "./admin/funciones.php";
include "./admin/gestion_bd.php";
include "./admin/permisos.php";
include "./admin/mensajes.php";

if (isset($_REQUEST['ubicacion'])) {
    $ubicacion = $_REQUEST['ubicacion'];
} else {
    $ubicacion = "top";
}
//--------------------------
if (isset($_REQUEST['a'])) {
    $a = $_REQUEST['a'];
} else {
    $a = "";
}

if (isset($_REQUEST['p'])) {
    $p = $_REQUEST['p'];
} else {
    $p = "index";
}

if (isset($_REQUEST['c'])) {
    $c = $_REQUEST['c'];
} else {
    $c = "index";
}

if (isset($_REQUEST['tabla'])) {
    $tabla = mysql_real_escape_string($_REQUEST['tabla']);
}


include "./vista/header.php"; 
include "./controladores/$p.php";
include "./vista/footer.php"; 
/**
 *  [error] El fichero /var/www/html/magia/admin/configuracion.php Ya existe
 * 
 * http://www.erdiagrams.com/datamodel-online-shop-idef1x.html
 * 
 * 
 */