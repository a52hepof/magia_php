<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="reserva_estatus"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="reserva_estatus_id" value="<?php echo $reserva_estatus_id; ?>"> 

 <div class="form-group"> 
     <label for="reserva_estatus_codigo" class="col-sm-2 control-label"><?php _t("Codigo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reserva_estatus_codigo" id="reserva_estatus_codigo" placeholder="<?php _t("Codigo"); ?>" value="<?php echo $reserva_estatus_codigo; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reserva_estatus_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reserva_estatus_estatus" id="reserva_estatus_estatus" placeholder="<?php _t("Estatus"); ?>" value="<?php echo $reserva_estatus_estatus; ?>"   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reserva_estatus_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reserva_estatus_orden" id="reserva_estatus_orden" placeholder="<?php _t("Orden"); ?>" value="<?php echo $reserva_estatus_orden; ?>"   > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
