<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "_paginas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {

        
        include "./_paginas/reg/post.php";
        
        
        if (_paginas_existe($_paginas_pagina)) {
            echo $_paginas_pagina; 
            mensaje("alto", "La página ya existe");
        } else {
            include "./_paginas/modelos/crear.php";
            echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $pagina . '&c=index">';
        }
    } else {
        include "./_paginas/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
