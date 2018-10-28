<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="reserva_estatus">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="reserva_estatus_codigo" value="" placeholder="<?php _t("Codigo"); ?>"></td> 
 <td><input class="form-control" type="text" name="reserva_estatus_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
 <td><input class="form-control" type="text" name="reserva_estatus_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 