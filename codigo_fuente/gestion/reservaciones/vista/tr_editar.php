<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "reservaciones", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=reservaciones&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="reservaciones">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="reservaciones_id" value="<?php echo $reservaciones_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="reservaciones_id_parking" value="<?php echo $reservaciones_id_parking; ?>" placeholder="<?php _t("Id_parking"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservaciones_placa" value="<?php echo $reservaciones_placa; ?>" placeholder="<?php _t("Placa"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservaciones_fecha_i" value="<?php echo $reservaciones_fecha_i; ?>" placeholder="<?php _t("Fecha_i"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservaciones_hora_i" value="<?php echo $reservaciones_hora_i; ?>" placeholder="<?php _t("Hora_i"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservaciones_id_estatus" value="<?php echo $reservaciones_id_estatus; ?>" placeholder="<?php _t("Id_estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 