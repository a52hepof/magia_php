<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="test">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="test_nombre" value="" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="test_apellidos" value="" placeholder="<?php _t("Apellidos"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 