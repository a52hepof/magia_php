<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "parkings", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=parkings&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="parkings">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="parkings_id" value="<?php echo $parkings_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="parkings_id_contacto" value="<?php echo $parkings_id_contacto; ?>" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_direccion" value="<?php echo $parkings_direccion; ?>" placeholder="<?php _t("Direccion"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_numero" value="<?php echo $parkings_numero; ?>" placeholder="<?php _t("Numero"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_cpostal" value="<?php echo $parkings_cpostal; ?>" placeholder="<?php _t("Cpostal"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_barrio" value="<?php echo $parkings_barrio; ?>" placeholder="<?php _t("Barrio"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_comuna" value="<?php echo $parkings_comuna; ?>" placeholder="<?php _t("Comuna"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_ciudad" value="<?php echo $parkings_ciudad; ?>" placeholder="<?php _t("Ciudad"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_pais" value="<?php echo $parkings_pais; ?>" placeholder="<?php _t("Pais"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_precio_hora" value="<?php echo $parkings_precio_hora; ?>" placeholder="<?php _t("Precio_hora"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_orden" value="<?php echo $parkings_orden; ?>" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_estatus" value="<?php echo $parkings_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 