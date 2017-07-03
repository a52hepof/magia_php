<?php

mensaje('info', 'Logs, no se puede editar');
/**
  magia_version: 0.0.8
 
$accion = "editar";
$pagina = "logs";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $logs_id = mysql_real_escape_string($_REQUEST['logs_id']);
        include "./logs/reg/post.php";
        include "./logs/modelos/editar.php";

        include "./logs/modelos/ver.php";
        include "./logs/reg/reg.php";
        include "./logs/vista/ver.php";
    } else {
        $logs_id = mysql_real_escape_string($_REQUEST['logs_id']);
        include "./logs/modelos/ver.php";
        include "./logs/reg/reg.php";
        include "./logs/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
 * 
 */
