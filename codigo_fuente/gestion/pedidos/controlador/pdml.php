<?php
$accion = "ver";
$pagina = "pedidos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {

    $pedidos_id = mysql_real_escape_string($_REQUEST['pedidos_id']);
    // dEBUG
    ($config_debug)?vardump($pedidos_id,array('$pedidos_id','$pedidos_id²                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ',__FILE__ ." LINE : ".__LINE__)):"";
    
        // no si se manda el id o el pedido no tiene estatus 1
    if (!is_int(intval($pedidos_id))) {
        mensaje('info', "Olvido el número de pedido");
        die();
    }
        
    include "./pedidos/modelos/ver.php";
    
    // sino existe el pedidos
    if(!$pedidos['id']){       
        //include "./pedidos/vista/form_buscar_por_id.php";         
        mensaje('info', 'Número no existe');               
        die();
    }
    
    
    
    
    include "./pedidos/reg/reg.php";
    
    
/**
 * Si el pedido le pertenece o tiene permiso para ver pedidos de otros 
 */
    if ($pedidos_email == $_usuarios_usuario || permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {

        
        // dEBUG
        vardump($pedidos_descripcion,array(
            '$pedidos_descripcion',
            'Aca viene el valor json de la base de datos'
            . '',__FILE__));
        
        
        $items = json_decode($pedidos_descripcion);
        
        // dEBUG
        vardump($items,array(
            '$items',
            'Cojo el json y lo paso a array'
            . '',__FILE__));
        

        $data = array();
        foreach ($items as $item => $valor) {
            $data[$item] = htmlentities($valor);
        }

        // dEBUG
        vardump($data,array(
            '$data',
            'Los valores puestos en $data, para poder llenar el formulario',
            'Aca es donde agrego los addslashes'
            . '',__FILE__));      

        //include "./pedidos/reg/data.php";
        include "./pedidos/reg/pdf.php";
              
        
        include "./pedidos/vista/pdml.php";
    } else {
        mensaje("info", "Pedido no le pertenece");
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
