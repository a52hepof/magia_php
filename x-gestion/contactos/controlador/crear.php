<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {



    if (isset($_REQUEST['a']) == 'crear') {

        include "./_contactos/reg/post.php";

        // si no se envia email
        if (!$_contactos_email) {
            mensaje('info', 'Olvido email');
            die();
        }


        // si ya existe
        if (contactos_campo_segun_email('id', $_contactos_email)) {
            mensaje('info', 'Email ya existe en la base de datos');
            die();
        }



        include "./_contactos/modelos/crear.php";

        // procedemos a registrar el login 
        $_contactos_grupo = (isset($_POST['contactos_grupo'])) ? mysql_real_escape_string(trim($_POST['contactos_grupo'])) : 'centros';
        //  $_contactos_email = (isset($_POST['contactos_email'])) ? mysql_real_escape_string(trim($_POST['contactos_email'])):null;
        
        
        
        
        
        
        
        $_contactos_clave_sin_codificar = (isset($_POST['contactos_clave'])) ? mysql_real_escape_string(trim($_POST['contactos_clave'])) : genera_clave();
        
        $_contactos_clave = codifica_clave($_contactos_clave_sin_codificar);

        // paso el estatus 1 al usuario
        $_contactos_estatus = 1;
        include "./_contactos/modelos/reg_login.php";
        
        // verificamos que se ha registrado el contacto y el login 
        if(
                 contactos_campo_segun_email('id', $_contactos_email) && 
                _usuarios_campo_segun_email('id', $_contactos_email)
           ){
            // enviamos un email al usuario             
            include "./emails/vista/$_contactos_idioma/invitacion_al_crear_cuenta.php";
            emails_enviar($_contactos_email, utf8_decode($body),_tr('Nueva cuenta creada',false,$_contactos_idioma));
                                  
        }else{
            // caso de no haber registro en la tabla mandamos el error 
            mensaje('atencion', 'Error al registrar este usuario');            
        }
        
        
        
        



       // echo '<META http-equiv="refresh" content="0; URL=index.php?p=contactos">';
    } else {
        include "./_contactos/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
