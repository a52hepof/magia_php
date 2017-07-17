 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "borrar"; 
 $pagina = "pedidos"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $pedidos_id 		= mysql_real_escape_string($_REQUEST['pedidos_id']); 
 
    $pedidos_email = pedidos_campo_segun_email('email', $_usuarios_grupo);
 
     if ($pedidos_email == $_usuarios_usuario || permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {
         include "./pedidos/modelos/borrar.php"; 
    } else {
        mensaje("info", "Pedido no le pertenece");
    }
    
    
    

 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
