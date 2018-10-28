<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="reserva_estatus"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="reserva_estatus_codigo" class="col-sm-2 control-label"><?php _t("Codigo");?></label> 
       <input type="text" class="form-control" name="reserva_estatus_codigo" id="reserva_estatus_codigo" placeholder="<?php _t("Codigo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reserva_estatus_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="reserva_estatus_estatus" id="reserva_estatus_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="reserva_estatus_orden" class="col-sm-2 control-label"><?php _t("Orden");?></label> 
       <input type="text" class="form-control" name="reserva_estatus_orden" id="reserva_estatus_orden" placeholder="<?php _t("Orden"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
