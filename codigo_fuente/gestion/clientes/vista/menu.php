<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="clientes">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Tipo_documento"><?php _t("Tipo_documento"); ?></label>
                      <input type="text" class="form-control" name="clientes_tipo_documento" id="clientes_tipo_documento" placeholder="<?php _t("Tipo_documento"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ruc_prefijo"><?php _t("Ruc_prefijo"); ?></label>
                      <input type="text" class="form-control" name="clientes_ruc_prefijo" id="clientes_ruc_prefijo" placeholder="<?php _t("Ruc_prefijo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Numero_documento"><?php _t("Numero_documento"); ?></label>
                      <input type="text" class="form-control" name="clientes_numero_documento" id="clientes_numero_documento" placeholder="<?php _t("Numero_documento"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Empresa"><?php _t("Empresa"); ?></label>
                      <input type="text" class="form-control" name="clientes_empresa" id="clientes_empresa" placeholder="<?php _t("Empresa"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cliente"><?php _t("Cliente"); ?></label>
                      <input type="text" class="form-control" name="clientes_cliente" id="clientes_cliente" placeholder="<?php _t("Cliente"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Saludo"><?php _t("Saludo"); ?></label>
                      <input type="text" class="form-control" name="clientes_saludo" id="clientes_saludo" placeholder="<?php _t("Saludo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Direccion"><?php _t("Direccion"); ?></label>
                      <input type="text" class="form-control" name="clientes_direccion" id="clientes_direccion" placeholder="<?php _t("Direccion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cpostal"><?php _t("Cpostal"); ?></label>
                      <input type="text" class="form-control" name="clientes_cpostal" id="clientes_cpostal" placeholder="<?php _t("Cpostal"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ciudad"><?php _t("Ciudad"); ?></label>
                      <input type="text" class="form-control" name="clientes_ciudad" id="clientes_ciudad" placeholder="<?php _t("Ciudad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Provincia"><?php _t("Provincia"); ?></label>
                      <input type="text" class="form-control" name="clientes_provincia" id="clientes_provincia" placeholder="<?php _t("Provincia"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Pais"><?php _t("Pais"); ?></label>
                      <input type="text" class="form-control" name="clientes_pais" id="clientes_pais" placeholder="<?php _t("Pais"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Tel"><?php _t("Tel"); ?></label>
                      <input type="text" class="form-control" name="clientes_tel" id="clientes_tel" placeholder="<?php _t("Tel"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fax"><?php _t("Fax"); ?></label>
                      <input type="text" class="form-control" name="clientes_fax" id="clientes_fax" placeholder="<?php _t("Fax"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Email"><?php _t("Email"); ?></label>
                      <input type="text" class="form-control" name="clientes_email" id="clientes_email" placeholder="<?php _t("Email"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Notas"><?php _t("Notas"); ?></label>
                      <input type="text" class="form-control" name="clientes_notas" id="clientes_notas" placeholder="<?php _t("Notas"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Tipo"><?php _t("Tipo"); ?></label>
                      <input type="text" class="form-control" name="clientes_tipo" id="clientes_tipo" placeholder="<?php _t("Tipo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_registro"><?php _t("Fecha_registro"); ?></label>
                      <input type="text" class="form-control" name="clientes_fecha_registro" id="clientes_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Es_cliente"><?php _t("Es_cliente"); ?></label>
                      <input type="text" class="form-control" name="clientes_es_cliente" id="clientes_es_cliente" placeholder="<?php _t("Es_cliente"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estrellas"><?php _t("Estrellas"); ?></label>
                      <input type="text" class="form-control" name="clientes_estrellas" id="clientes_estrellas" placeholder="<?php _t("Estrellas"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="clientes_estatus" id="clientes_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>