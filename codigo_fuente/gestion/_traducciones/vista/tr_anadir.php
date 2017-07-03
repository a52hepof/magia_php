<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="_traducciones">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="_traducciones_frase" value="" placeholder="<?php _t("Frase"); ?>"></td> 
 <td><input class="form-control" type="text" name="_traducciones_idioma" value="" placeholder="<?php _t("Idioma"); ?>"></td> 
 <td><input class="form-control" type="text" name="_traducciones_traduccion" value="" placeholder="<?php _t("Traduccion"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 