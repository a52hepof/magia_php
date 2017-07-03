<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="_permisos">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="_permisos_grupo" value="" placeholder="<?php _t("Grupo"); ?>"></td> 
 <td><input class="form-control" type="text" name="_permisos_pagina" value="" placeholder="<?php _t("Pagina"); ?>"></td> 
 <td><input class="form-control" type="text" name="_permisos_permiso" value="" placeholder="<?php _t("Permiso"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 