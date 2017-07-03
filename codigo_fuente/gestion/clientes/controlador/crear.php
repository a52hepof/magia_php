<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "clientes";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    
   
    
    if (isset($_REQUEST['a']) == 'crear') {
        
        include "./clientes/reg/post.php";
        
        // si no se envia email
        if(!$clientes_email){
            mensaje('info', 'Olvido email'); 
            die();
        }
        
        
        // si ya existe
        if(clientes_campo_segun_email('id', $clientes_email)){
            mensaje('info', 'Email ya existe en la base de datos'); 
            die();
        }
        
        

        include "./clientes/modelos/crear.php";
            
        // procedemos a registrar el login 
        $clientes_grupo = (isset($_POST['clientes_grupo'])) ? mysql_real_escape_string(trim($_POST['clientes_grupo'])):'centros';
        $clientes_email = (isset($_POST['clientes_email'])) ? mysql_real_escape_string(trim($_POST['clientes_email'])):null;
        $clientes_clave = (isset($_POST['clientes_clave'])) ? mysql_real_escape_string(trim($_POST['clientes_clave'])): genera_clave();

        include "./clientes/modelos/reg_login.php";
        

                
        echo '<META http-equiv="refresh" content="0; URL=index.php?p=clientes">';  
        
        
        
    } else {
        include "./clientes/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
