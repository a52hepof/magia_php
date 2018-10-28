<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="autos">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="autos_placa" value="" placeholder="<?php _t("Placa"); ?>"></td> 
 <td><input class="form-control" type="text" name="autos_id_contacto" value="" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="autos_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 