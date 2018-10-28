<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="autos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Placa"><?php _t("Placa"); ?></label>
                      <input type="text" class="form-control" name="autos_placa" id="autos_placa" placeholder="<?php _t("Placa"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Id_contacto"><?php _t("Contacto"); ?></label>
                      <input type="text" class="form-control" name="autos_id_contacto" id="autos_id_contacto" placeholder="<?php _t("Id_contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="autos_estatus" id="autos_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>