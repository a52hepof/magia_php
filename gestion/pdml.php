<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//
session_start("magia_php");
include "z_verificar.php";
include "../admin/bd.php";
include "../admin/errores.php";
include "../admin/funciones.php";
include "../admin/configuracion.php";
include "../admin/coneccion.php";
include "../admin/conec.php";
include "../admin/funciones_sql.php";
//include "../admin/getbootstrap.php";
include "../admin/permisos.php";
include "../admin/traductor.php";
include "../admin/contenido.php";
//include "../admin/formularios.php";
//include "../admin/menu.php";
include "../admin/mensajes.php";
//include "../admin/paginacion.php";
///require '../includes/PHPMailer-5.2.23/PHPMailerAutoload.php';
_incluir_funciones();
//require '../includes/pdml/fpdf.php';
//require 'pdml.php';
include "../includes/pdml/pdml.php";
$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : "home";
$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : "pdf";
include "../gestion/$p/controlador/$c.php";
?>
<pdml>
    <body>
        <font face="Arial" size="16pt">
        <h1>ERROR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</h1>
            <?php echo __FILE__; ?></font>
    </body>
</pdml>

