<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="autos"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="autos_placa" class="col-sm-2 control-label"><?php _t("Placa");?></label> 
       <input type="text" class="form-control" name="autos_placa" id="autos_placa" placeholder="<?php _t("Placa"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="autos_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto");?></label> 
       <input type="text" class="form-control" name="autos_id_contacto" id="autos_id_contacto" placeholder="<?php _t("Id_contacto"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="autos_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="autos_estatus" id="autos_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
