<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="logs"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="logs_fecha" class="col-sm-2 control-label"><?php _t("Fecha");?></label> 
       <input type="text" class="form-control" name="logs_fecha" id="logs_fecha" placeholder="<?php _t("Fecha"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="logs_usuario" class="col-sm-2 control-label"><?php _t("Usuario");?></label> 
       <input type="text" class="form-control" name="logs_usuario" id="logs_usuario" placeholder="<?php _t("Usuario"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="logs_p" class="col-sm-2 control-label"><?php _t("P");?></label> 
       <input type="text" class="form-control" name="logs_p" id="logs_p" placeholder="<?php _t("P"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="logs_c" class="col-sm-2 control-label"><?php _t("C");?></label> 
       <input type="text" class="form-control" name="logs_c" id="logs_c" placeholder="<?php _t("C"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="logs_a" class="col-sm-2 control-label"><?php _t("A");?></label> 
       <input type="text" class="form-control" name="logs_a" id="logs_a" placeholder="<?php _t("A"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="logs_id_pedido" class="col-sm-2 control-label"><?php _t("Pedido");?></label> 
       <input type="text" class="form-control" name="logs_id_pedido" id="logs_id_pedido" placeholder="<?php _t("Id_pedido"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="logs_argumento" class="col-sm-2 control-label"><?php _t("Argumento");?></label> 
       <input type="text" class="form-control" name="logs_argumento" id="logs_argumento" placeholder="<?php _t("Argumento"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
