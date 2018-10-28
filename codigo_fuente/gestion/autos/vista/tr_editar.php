<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "autos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=autos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="autos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="autos_id" value="<?php echo $autos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="autos_placa" value="<?php echo $autos_placa; ?>" placeholder="<?php _t("Placa"); ?>"></td> 
 <td><input class="form-control" type="text" name="autos_id_contacto" value="<?php echo $autos_id_contacto; ?>" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="autos_estatus" value="<?php echo $autos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 