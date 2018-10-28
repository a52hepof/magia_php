<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="reserva_estatus">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Codigo"><?php _t("Codigo"); ?></label>
                      <input type="text" class="form-control" name="reserva_estatus_codigo" id="reserva_estatus_codigo" placeholder="<?php _t("Codigo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="reserva_estatus_estatus" id="reserva_estatus_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Orden"><?php _t("Orden"); ?></label>
                      <input type="text" class="form-control" name="reserva_estatus_orden" id="reserva_estatus_orden" placeholder="<?php _t("Orden"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>