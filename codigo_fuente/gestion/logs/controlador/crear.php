<?php
mensaje('info', 'logs, se crean automaticamante, no se puede crear');
/**
  magia_version: 0.0.8


        include "./logs/reg/request.php";
        include "./logs/modelos/crear.php";
        
        
$accion = "crear";
$pagina = "logs";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {
        include "./logs/reg/post.php";
        include "./logs/modelos/crear.php";
    } else {
        include "./logs/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
         * 
         */
