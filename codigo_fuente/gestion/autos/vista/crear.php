<?php /**
  magia_version: 0.0.11
 * */ ?>
<h2>

    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="autos"> 
    <input type="hidden" name="c" value="crear"> 
    <input type="hidden" name="a" value="crear"> 

    <div class="form-group"> 
        <label for="autos_placa" class="col-sm-2 control-label"><?php _t("Placa"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="autos_placa" id="autos_placa" placeholder="<?php _t("Placa"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="autos_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="autos_id_contacto" >
                <?php contactos_add($autos_id_contacto); ?>
            </select>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="autos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <div class="col-sm-10"> 
            <div class="radio">
                <label>
                    <input  type="radio" name="autos_estatus" value="1" >
                    <?php _t("Activo"); ?> 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input  type="radio" name="autos_estatus" value="0"  checked >
                    <?php _t("Bloqueado"); ?>  
                </label>
            </div>
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 
