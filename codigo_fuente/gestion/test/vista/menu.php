<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="test">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Nombre"><?php _t("Nombre"); ?></label>
                      <input type="text" class="form-control" name="test_nombre" id="test_nombre" placeholder="<?php _t("Nombre"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Apellidos"><?php _t("Apellidos"); ?></label>
                      <input type="text" class="form-control" name="test_apellidos" id="test_apellidos" placeholder="<?php _t("Apellidos"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>