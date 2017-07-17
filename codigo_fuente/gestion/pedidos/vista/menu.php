<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="pedidos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Ref"><?php _t("Ref"); ?></label>
                      <input type="text" class="form-control" name="pedidos_ref" id="pedidos_ref" placeholder="<?php _t("Ref"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Empresa"><?php _t("Empresa"); ?></label>
                      <input type="text" class="form-control" name="pedidos_empresa" id="pedidos_empresa" placeholder="<?php _t("Empresa"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Contacto"><?php _t("Contacto"); ?></label>
                      <input type="text" class="form-control" name="pedidos_contacto" id="pedidos_contacto" placeholder="<?php _t("Contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Email"><?php _t("Email"); ?></label>
                      <input type="text" class="form-control" name="pedidos_email" id="pedidos_email" placeholder="<?php _t("Email"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Descripcion"><?php _t("Descripcion"); ?></label>
                      <input type="text" class="form-control" name="pedidos_descripcion" id="pedidos_descripcion" placeholder="<?php _t("Descripcion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha"><?php _t("Fecha"); ?></label>
                      <input type="text" class="form-control" name="pedidos_fecha" id="pedidos_fecha" placeholder="<?php _t("Fecha"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Notas"><?php _t("Notas"); ?></label>
                      <input type="text" class="form-control" name="pedidos_notas" id="pedidos_notas" placeholder="<?php _t("Notas"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="pedidos_estatus" id="pedidos_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>