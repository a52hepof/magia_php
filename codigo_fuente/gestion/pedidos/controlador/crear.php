<?php

$accion = "crear";
$pagina = "pedidos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {
        // aca ponemos el sistema para enviar el email 
        // Email del administrador del sistema
        // Email del pedido

        include "./pedidos/reg/request.php";

        // perdida_auditiva
        $pa = array("legere", "moyenne", "grave");
        $hay_pa = false;
        foreach ($_REQUEST as $key => $value) {
            // comparar con el value
            if (in_array($value, $pa)) {
                $hay_pa = true;
            }
        }
        // orejera
        // en esta se coje el valor no el key
        // $value
        $orejera = array("molle", "dure");
        $hay_orejera = false;
        foreach ($_REQUEST as $key => $value) {
            // comparar con el value
            if (in_array($value, $orejera)) {
                $hay_orejera = true;
            }
        }


        $hay_ventilation_gauche = false;
        if ($_REQUEST['ventilation_gauche']) {
            $hay_ventilation_gauche = true;
        }

        $hay_ventilation_droite = false;
        if ($_REQUEST['ventilation_droite']) {
            $hay_ventilation_droite = true;
        }

        $hay_marques = false;
        if ($_REQUEST['marques']) {
            $hay_marques = true;
        }
        // a no confundir models con modelos
        $hay_models = false;
        if ($_REQUEST['models']) {
            $hay_models = true;
        }
        // tipos
        $tipos = array("bte", "rite", "slim_tube", "custom_dume", "natation", "dormir", "anti_bruit");
        $hay_tipo = false;
        foreach ($_REQUEST as $key => $value) {
            if (in_array($key, $tipos)) {
                $hay_tipo = true;
            }
        }

        // Modelos
        $modelos = array("invisible", "coquille", "conduit_seul", "epaulemnent", "prince_de_crave", "iros");
        $hay_modelos = false;
        foreach ($_REQUEST as $key => $value) {
            if (in_array($key, $modelos)) {
                $hay_modelos = true;
            }
        }
        // materiales
        $materiales = array("resine", "silicone", "thermotec", "thermosoft", "anti_bacterie", "mix");
        $hay_materiales = false;
        foreach ($_REQUEST as $key => $value) {
            if (in_array($key, $materiales)) {
                $hay_materiales = true;
            }
        }

        // Ingreso los mensajes de error al array errores para despues mostrar todos los errores de una
        $errores = array();
        if (!$hay_pa) {
            array_push($errores, 'Debe escojer un tipo de perdida auditiva');
        }
        if (!$orejera) {
            array_push($errores, 'Debe escojer un tipo de orejera');
        }
        if (!$hay_tipo) {
            array_push($errores, 'Debe escojer un tipo');
        }
        if (!$hay_modelos) {
            array_push($errores, 'Debe escojer un modelo');
        }
        if (!$hay_materiales) {
            array_push($errores, 'Debe escojer un material');
        }
        if (!$hay_ventilation_gauche) {
            array_push($errores, 'Debe definir un valor en ventilación izquierda');
        }
        if (!$hay_ventilation_droite) {
            array_push($errores, 'Debe definir un valor en ventilación derecha');
        }
        if (!$hay_marques) {
            array_push($errores, 'Debe definir un valor en RITE / SLIM TUBE (marques)');
        }
        if (!$hay_models) {
            array_push($errores, 'Debe definir un valor en RITE / SLIM TUBE (models) ');
        }
        /// Muestro los errores
        foreach ($errores as $mensaje) {
            mensaje('info', $mensaje);
        }


        // verifico si hay un email y no hay errores para dejar pasar el formulario

        if ($pedidos_email && !$errores) {
            // Registro del  pedido
            //
            //
            include "./pedidos/modelos/crear.php";

            // verifico si el pedido exite, y mando los email 
            // sino pongo mensaje de error
            if (pedidos_campo_segun_ref('id', $pedidos_ref)) {
                //*************************************
                // ingreso la planilla del email
                $contacto_idioma = contactos_campo_segun_email('idioma', $pedidos_email);
                
                include "./emails/vista/$contacto_idioma/pedido_crear.php";
                
                echo $contacto_idioma; 
                // muestro el email al usuario 
                echo $body;
                // envio el email
                emails_enviar($pedidos_email, utf8_decode($body),  _tr('Nuevo pedido',false,$contacto_idioma));
                
                // envio email al administrador 
                emails_enviar($config_email_email, utf8_decode($body), _tr('Nuevo pedido',false,$contacto_idioma));
                
            } else {
                mensaje('atencion', 'Error, pedido no registrado');
            }



            if (!$config_debug) {
                //  echo '<meta http-equiv="refresh" content="0; url=index.php?p=pedidos">';
            }
        } // fin verifica email
    } else {

        if (!contactos_campo_segun_email('estatus', $_usuarios_usuario)) {
            mensaje("info", "Cuenta bloqueada, no puede realizar pedidos");
        } else {

            $uniqid = uniqid();
            $pedidos_numero_actual = pedidos_numero_actual();
            $pedidos_numero_a_crear = pedidos_numero_actual() + 1;
            $pedidos_id_formateado = pedidos_id_formateado($pedidos_numero_a_crear);

            vardump($_GET, array('$_GET', '<b>Valor esperado:</b> array de dos elementos', __FILE__));
            vardump($uniqid, array('$uniqid', __FILE__));
            vardump($pedidos_numero_actual, array('$pedidos_numero_actual', __FILE__));
            vardump($pedidos_numero_a_crear, array('$pedidos_numero_a_crear', 'Debe ser uno mas que el actual ', __FILE__));
            vardump($pedidos_id_formateado, array('$pedidos_id_formateado', 'Ponemos ceros al inicio', __FILE__));

            include "./pedidos/vista/crear.php";
        }
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
