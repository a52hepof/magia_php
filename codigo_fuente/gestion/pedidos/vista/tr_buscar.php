<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="pedidos">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="pedidos_ref" value="" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_empresa" value="" placeholder="<?php _t("Empresa"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_contacto" value="" placeholder="<?php _t("Contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_email" value="" placeholder="<?php _t("Email"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_descripcion" value="" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_fecha" value="" placeholder="<?php _t("Fecha"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_notas" value="" placeholder="<?php _t("Notas"); ?>"></td> 
 <td><input class="form-control" type="text" name="pedidos_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 