<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="logs">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="logs_fecha" value="" placeholder="<?php _t("Fecha"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_usuario" value="" placeholder="<?php _t("Usuario"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_p" value="" placeholder="<?php _t("P"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_c" value="" placeholder="<?php _t("C"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_a" value="" placeholder="<?php _t("A"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_id_pedido" value="" placeholder="<?php _t("Id_pedido"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_argumento" value="" placeholder="<?php _t("Argumento"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 