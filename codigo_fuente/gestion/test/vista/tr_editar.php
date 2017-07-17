<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "test", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=test&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="test">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="test_id" value="<?php echo $test_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="test_nombre" value="<?php echo $test_nombre; ?>" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="test_apellidos" value="<?php echo $test_apellidos; ?>" placeholder="<?php _t("Apellidos"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 