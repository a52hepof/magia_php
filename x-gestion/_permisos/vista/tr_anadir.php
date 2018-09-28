<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_permisos">
    <input type="hidden" name="c" value="crear">    
    <input type="hidden" name="a" value="crear">    
    <tr> 
        <td></td> 
        <td>
            <select class="form-control" name="_permisos_grupo">
                <?php _grupos_add($busqueda); ?>
            </select>

        </td> 
        <td>
            <select class="form-control" name="_permisos_pagina">
                <?php 
                $paginas_a_excluir = array();
                _paginas_add("$busqueda",$paginas_a_excluir); ?>
            </select>
            </td> 
        <td><input class="form-control" type="text" name="_permisos_permiso" value="" placeholder="<?php _t("Permiso"); ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 