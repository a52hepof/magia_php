<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "clientes";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $clientes_id = mysql_real_escape_string($_REQUEST['clientes_id']);
        include "./clientes/reg/post.php";
        include "./clientes/modelos/editar.php";
        
        
        
        // procedemos a registrar el login 
        $clientes_grupo = (isset($_POST['clientes_grupo'])) ? mysql_real_escape_string(trim($_POST['clientes_grupo'])):'centros';
        $clientes_clave = (isset($_POST['clientes_clave'])) ? mysql_real_escape_string(trim($_POST['clientes_clave'])):false;
      
        include "./clientes/modelos/editar_grupo.php";
        
        if($clientes_clave){
            $clientes_clave = codifica_clave($clientes_clave);
            include "./clientes/modelos/editar_clave.php";
        }

        

        include "./clientes/modelos/ver.php";
        include "./clientes/reg/reg.php";
        include "./clientes/vista/ver.php";
    } else {
        $clientes_id = mysql_real_escape_string($_REQUEST['clientes_id']);
        include "./clientes/modelos/ver.php";
        include "./clientes/reg/reg.php";
        include "./clientes/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
