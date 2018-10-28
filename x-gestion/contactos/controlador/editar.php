<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "contactos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $_contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']);
        include "./_contactos/reg/post.php";

        // consigo el estatus actual del contacto
        $_contactos_estatus_actual = contactos_campo_segun_email('estatus', $_contactos_email);
       // echo "<hr>$_contactos_estatus_actual<hr>";
        // y si el estatus que viene es diferente 
        if ($_contactos_estatus_actual != $_contactos_estatus) {
            mensaje('info', 'Estatus actualizado, email enviado a contacto');
            // depende del nuevo estatus, mando el mensaje            
            
            switch ($_contactos_estatus) {
                case 0:
                    // mando el email al nuevo usuario
                    
                    include "./emails/vista/$_contactos_idioma/bloquear_cuenta.php";
                    emails_enviar($_contactos_email, utf8_decode($body),_tr('Cuenta bloqueada',false,$_contactos_idioma));
                    echo $body;

                    break;
                case 1:
                    // mando el email al nuevo usuario
                    include "./emails/vista/$_contactos_idioma/activar_cuenta.php";
                    emails_enviar($_contactos_email, utf8_decode($body),_tr('Cuenta activada',false,$_contactos_idioma));
                    echo $body;
                    break;
                default:
                    break;
            }
        }

        include "./_contactos/modelos/editar.php";



        // procedemos a registrar el login 
        $_contactos_grupo = (isset($_POST['contactos_grupo'])) ? mysql_real_escape_string(trim($_POST['contactos_grupo'])) : 'centros';
        $_contactos_clave = (isset($_POST['contactos_clave'])) ? mysql_real_escape_string(trim($_POST['contactos_clave'])) : false;

        include "./_contactos/modelos/editar_grupo.php";

        if ($_contactos_clave) {
            $_contactos_clave = codifica_clave($_contactos_clave);
            include "./_contactos/modelos/editar_clave.php";
            // enviar mensaje al admin
            // enviar mensaje al usuario de cambia cambiada
        }





        /*
          include "./_contactos/modelos/ver.php";
          include "./_contactos/reg/reg.php";
          include "./_contactos/vista/ver.php";
         */
    } else {
        $_contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']);
        include "./_contactos/modelos/ver.php";
        include "./_contactos/reg/reg.php";
        include "./_contactos/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 


