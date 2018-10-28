<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="parkings">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="parkings_id_contacto" value="" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_direccion" value="" placeholder="<?php _t("Direccion"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_numero" value="" placeholder="<?php _t("Numero"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_cpostal" value="" placeholder="<?php _t("Cpostal"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_barrio" value="" placeholder="<?php _t("Barrio"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_comuna" value="" placeholder="<?php _t("Comuna"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_ciudad" value="" placeholder="<?php _t("Ciudad"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_pais" value="" placeholder="<?php _t("Pais"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_precio_hora" value="" placeholder="<?php _t("Precio_hora"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="parkings_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 