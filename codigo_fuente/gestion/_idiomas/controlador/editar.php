<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "_idiomas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $_idiomas_id = mysql_real_escape_string($_REQUEST['_idiomas_id']);
        include "./_idiomas/reg/post.php";
        include "./_idiomas/modelos/editar.php";

        include "./_idiomas/modelos/ver.php";
        include "./_idiomas/reg/reg.php";
        include "./_idiomas/vista/ver.php";
    } else {
        $_idiomas_id = mysql_real_escape_string($_REQUEST['_idiomas_id']);
        include "./_idiomas/modelos/ver.php";
        include "./_idiomas/reg/reg.php";
        include "./_idiomas/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
