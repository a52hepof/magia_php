<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "pedidos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=pedidos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="pedidos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="pedidos_id" value="<?php echo $pedidos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="pedidos_ref" value="<?php echo $pedidos_ref; ?>" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_empresa" value="<?php echo $pedidos_empresa; ?>" placeholder="<?php _t("Empresa"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_contacto" value="<?php echo $pedidos_contacto; ?>" placeholder="<?php _t("Contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_email" value="<?php echo $pedidos_email; ?>" placeholder="<?php _t("Email"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_descripcion" value="<?php echo $pedidos_descripcion; ?>" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_fecha" value="<?php echo $pedidos_fecha; ?>" placeholder="<?php _t("Fecha"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_notas" value="<?php echo $pedidos_notas; ?>" placeholder="<?php _t("Notas"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_estatus" value="<?php echo $pedidos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 