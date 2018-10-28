<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="parkings"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="parkings_id" value="<?php echo $parkings_id; ?>"> 

 <div class="form-group"> 
     <label for="parkings_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="parkings_id_contacto" <?php echo $parkings_id_contacto; ?>>
        <?php contactos_add($parkings_id_contacto); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_direccion" class="col-sm-2 control-label"><?php _t("Direccion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="parkings_direccion" id="parkings_direccion" placeholder="<?php _t("Direccion"); ?>" value="<?php echo $parkings_direccion; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_numero" class="col-sm-2 control-label"><?php _t("Numero"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="parkings_numero" id="parkings_numero" placeholder="<?php _t("Numero"); ?>" value="<?php echo $parkings_numero; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_cpostal" class="col-sm-2 control-label"><?php _t("Cpostal"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="parkings_cpostal" id="parkings_cpostal" placeholder="<?php _t("Cpostal"); ?>" value="<?php echo $parkings_cpostal; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_barrio" class="col-sm-2 control-label"><?php _t("Barrio"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="parkings_barrio" id="parkings_barrio" placeholder="<?php _t("Barrio"); ?>" value="<?php echo $parkings_barrio; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_comuna" class="col-sm-2 control-label"><?php _t("Comuna"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="parkings_comuna" id="parkings_comuna" placeholder="<?php _t("Comuna"); ?>" value="<?php echo $parkings_comuna; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_ciudad" class="col-sm-2 control-label"><?php _t("Ciudad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="parkings_ciudad" id="parkings_ciudad" placeholder="<?php _t("Ciudad"); ?>" value="<?php echo $parkings_ciudad; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_pais" class="col-sm-2 control-label"><?php _t("Pais"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="parkings_pais" id="parkings_pais" placeholder="<?php _t("Pais"); ?>" value="<?php echo $parkings_pais; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_precio_hora" class="col-sm-2 control-label"><?php _t("Precio hora"); ?></label> 
     <div class="col-sm-10"> 
       <input 
           type="text" 
           class="form-control" 
           name="parkings_precio_hora" 
           id="parkings_precio_hora" 
           placeholder="<?php _t("Precio hora"); ?>" 
           value="<?php echo $parkings_precio_hora; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="parkings_orden" id="parkings_orden" placeholder="<?php _t("Orden"); ?>" value="<?php echo $parkings_orden; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="parkings_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="parkings_estatus" value="1" <?php echo "$parkings_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="parkings_estatus" value="0"  <?php echo "$parkings_estatus_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
