<?php

if (isset($_REQUEST['a']) == 'auto_registro') {

    include "./_contactos/reg/post.php";

    if (!$_contactos_email) {
        mensaje('info', 'Olvido email');
        die();
    }


    if (contactos_campo_segun_email('id', $_contactos_email)) {
        mensaje('info', 'Email ya existe en la base de datos');
        die();
    }

    include "./zzz/modelos/auto_registro.php";

    $_contactos_grupo = $config_grupo_por_defecto; 
    $_contactos_estatus = 0;
    $_contactos_clave_sin_codiicar = genera_clave();
    $_contactos_clave = codifica_clave($_contactos_clave_sin_codiicar);
    
    
    include "./_contactos/modelos/reg_login.php";
   
    
    // Envia email al contacto
    // Envia email al contacto
    // Envia email al contacto
    if($config_enviar_email_contacto_auto_registro){          
        include "./emails/vista/$_contactos_idioma/auto_registro.php";
        emails_enviar($_contactos_email, utf8_decode($body),_tr('Nuevo usuario',false,$_contactos_idioma));
       // echo $body;
       // echo "\$_contactos_idioma $_contactos_idioma ";
    }
     

    // si el login esta registrado correctamente, 
    if (contactos_campo_segun_email('id', $_contactos_email)) {
        echo '<h2>' . _t('Registrado con exito') . '</h2>';
        echo '<h2>' . _t('Revise su email') . '</h2>';
    }
    // enviamos un email
    //echo '<META http-equiv="refresh" content="0; URL=index.php?p=contactos">';
} else{
    echo "noo esta en auto"; 
}