<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="reservaciones">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="reservaciones_id_parking" value="" placeholder="<?php _t("Id_parking"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservaciones_placa" value="" placeholder="<?php _t("Placa"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservaciones_fecha_i" value="" placeholder="<?php _t("Fecha_i"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservaciones_hora_i" value="" placeholder="<?php _t("Hora_i"); ?>"></td> 
 <td><input class="form-control" type="text" name="reservaciones_id_estatus" value="" placeholder="<?php _t("Id_estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 