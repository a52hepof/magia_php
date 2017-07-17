<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "pedidos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {

    $pedidos_id = mysql_real_escape_string($_REQUEST['pedidos_id']);
    $a = mysql_real_escape_string($_REQUEST['a']);

    vardump($_POST,array('$_POST','$_POST inicial, de aca solo debo tomar en cuenta el $pedidos_id ',__FILE__));
    vardump($_GET,array('$_GET','Get inicial, de aca solo debo tomar en cuenta el $pedidos_id ',__FILE__));
    vardump($_REQUEST,array('$_REQUEST','$_REQUEST inicial, de aca solo debo tomar en cuenta el $pedidos_id ',__FILE__));
    vardump($pedidos_id,array('$pedidos_id','Valor del $pedidos_id',__FILE__));
    
    
    
    
    
    // no si se manda el id o el pedido no tiene estatus 1
    if (!$pedidos_id) {
        mensaje('info', "Olvido el número de pedido");
        die();
    }



    // no si se manda el id o el pedido no tiene estatus 1
    if (!is_int(intval($pedidos_id))) {

        mensaje('info', "Id pedido parece incorrecto");
        die();
    }



    // no si se manda el id o el pedido no tiene estatus 1
    if (pedidos_campo('estatus', $pedidos_id) != 1) {
        mensaje('info', 'Pedido no puede ser editado');
        mensaje('info', 'Solo los pedidos con estatus ' . pedidos_estatus(1) . ' pueden ser editados');
        die();
    }

    $pedidos_email = pedidos_campo('email', $pedidos_id);
    
    vardump($pedidos_email,array('$pedidos_email','Debo tener el email del pedido',__FILE__));    
    vardump($_usuarios_usuario,array('$_usuarios_usuario','Email del usuario conectado',__FILE__));
    vardump($_usuarios_grupo,array('$_usuarios_grupo','Grupo del usuario conectado',__FILE__));
    
    
    if ($pedidos_email == $_usuarios_usuario || permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {
    
        

        switch ($a) {
            case 'editar':
                 include "./pedidos/reg/request.php";

                vardump($_REQUEST, array('$_REQUEST', 'Los valores del formulario'));
/*

                //   $pedidos_ref = (isset($_POST['pedidos_ref'])) ? mysql_real_escape_string(trim($_POST['pedidos_ref'])) : null;
                // email va primero para poder calcular los otros datos del contacto
                $pedidos_email = (isset($_POST['pedidos_email'])) ? mysql_real_escape_string(trim($_POST['pedidos_email'])) : null;
                $pedidos_empresa = $_POST['empresa'] = contactos_campo_segun_email('empresa', $pedidos_email);
                $pedidos_contacto = $_POST['contacto'] = contactos_campo_segun_email('contacto', $pedidos_email);
                $pedidos_notas = (isset($_POST['pedidos_notas'])) ? mysql_real_escape_string(trim($_POST['pedidos_notas'])) : "notas por defecto";
                $pedidos_estatus = (isset($_POST['pedidos_estatus'])) ? mysql_real_escape_string(trim($_POST['pedidos_estatus'])) : 1;
                $json_descripcion = json_encode($_POST);

                vardump($json_descripcion, array('$json_descripcion', 'Aca me espero ver un json'));
*/
                include "./pedidos/modelos/editar.php";
                include "./email/vist/pedido_editar.php";




                echo $body;

                



                /**
                 * Enviamos el email, y su contenido 
                 */
                emails_enviar($pedidos_email, utf8_decode($body));

                if (!$config_debug) {
                    echo '<meta http-equiv="refresh" content="10; url=index.php?p=pedidos&c=ver&pedidos_id=' . $pedidos_id . '">';
                }



                break;

            case 'cambiar_contacto':
                $pedidos_email = (isset($_POST['pedidos_email'])) ? mysql_real_escape_string(trim($_POST['pedidos_email'])) : false;
                $pedidos_empresa = contactos_campo_segun_email('empresa', $pedidos_email);
                $pedidos_contacto = contactos_campo_segun_email('contacto', $pedidos_email);

                break;

            default:

                include "./pedidos/modelos/ver.php";
                include "./pedidos/reg/reg.php";
                if ($pedidos_email == $_usuarios_usuario || permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {
                    $items = json_decode($pedidos_descripcion);
                    $des = array();
                    foreach ($items as $item => $valor) {
                        $data[$item] = $valor;
                    }
                    include "./pedidos/reg/data.php";
                    include "./pedidos/vista/editar.php";
                } else {
                    mensaje("info", "Pedido no le pertenece");
                }
                break;
        }
    } else {
        mensaje("info", "Pedido no le pertenece");
    }


} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
