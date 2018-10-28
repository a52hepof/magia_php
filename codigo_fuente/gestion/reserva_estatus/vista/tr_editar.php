<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "reserva_estatus", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=reserva_estatus&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="reserva_estatus">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="reserva_estatus_id" value="<?php echo $reserva_estatus_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="reserva_estatus_codigo" value="<?php echo $reserva_estatus_codigo; ?>" placeholder="<?php _t("Codigo"); ?>"></td> 
 <td><input class="form-control" type="text" name="reserva_estatus_estatus" value="<?php echo $reserva_estatus_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
 <td><input class="form-control" type="text" name="reserva_estatus_orden" value="<?php echo $reserva_estatus_orden; ?>" placeholder="<?php _t("Orden"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 