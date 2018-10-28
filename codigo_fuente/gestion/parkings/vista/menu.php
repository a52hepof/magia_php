<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="parkings">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Id_contacto"><?php _t("Contacto"); ?></label>
                      <input type="text" class="form-control" name="parkings_id_contacto" id="parkings_id_contacto" placeholder="<?php _t("Id_contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Direccion"><?php _t("Direccion"); ?></label>
                      <input type="text" class="form-control" name="parkings_direccion" id="parkings_direccion" placeholder="<?php _t("Direccion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Numero"><?php _t("Numero"); ?></label>
                      <input type="text" class="form-control" name="parkings_numero" id="parkings_numero" placeholder="<?php _t("Numero"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cpostal"><?php _t("Cpostal"); ?></label>
                      <input type="text" class="form-control" name="parkings_cpostal" id="parkings_cpostal" placeholder="<?php _t("Cpostal"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Barrio"><?php _t("Barrio"); ?></label>
                      <input type="text" class="form-control" name="parkings_barrio" id="parkings_barrio" placeholder="<?php _t("Barrio"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Comuna"><?php _t("Comuna"); ?></label>
                      <input type="text" class="form-control" name="parkings_comuna" id="parkings_comuna" placeholder="<?php _t("Comuna"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ciudad"><?php _t("Ciudad"); ?></label>
                      <input type="text" class="form-control" name="parkings_ciudad" id="parkings_ciudad" placeholder="<?php _t("Ciudad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Pais"><?php _t("Pais"); ?></label>
                      <input type="text" class="form-control" name="parkings_pais" id="parkings_pais" placeholder="<?php _t("Pais"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Precio_hora"><?php _t("Precio_hora"); ?></label>
                      <input type="text" class="form-control" name="parkings_precio_hora" id="parkings_precio_hora" placeholder="<?php _t("Precio_hora"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Orden"><?php _t("Orden"); ?></label>
                      <input type="text" class="form-control" name="parkings_orden" id="parkings_orden" placeholder="<?php _t("Orden"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="parkings_estatus" id="parkings_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>