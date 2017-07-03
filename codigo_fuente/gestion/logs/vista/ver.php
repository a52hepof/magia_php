<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1> 
<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="logs"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="logs_id" value="<?php echo $logs_id; ?>"> 
   <script>
            $( function() {
              $( "#logs_fecha" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="logs_fecha" class="col-sm-2 control-label"><?php _t("Fecha"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="logs_fecha" id="logs_fecha" placeholder="<?php _t("aaaa-mm-dd"); ?>" value="<?php echo $logs_fecha; ?>"  disabled > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="logs_usuario" class="col-sm-2 control-label"><?php _t("Usuario"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="logs_usuario" id="logs_usuario" placeholder="<?php _t("Usuario"); ?>" value="<?php echo $logs_usuario; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="logs_p" class="col-sm-2 control-label"><?php _t("P"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="logs_p" id="logs_p" placeholder="<?php _t("P"); ?>" value="<?php echo $logs_p; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="logs_c" class="col-sm-2 control-label"><?php _t("C"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="logs_c" id="logs_c" placeholder="<?php _t("C"); ?>" value="<?php echo $logs_c; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="logs_a" class="col-sm-2 control-label"><?php _t("A"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="logs_a" id="logs_a" placeholder="<?php _t("A"); ?>" value="<?php echo $logs_a; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="logs_id_pedido" class="col-sm-2 control-label"><?php _t("Pedido"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="logs_id_pedido" disabled>
        <?php pedidos_add($logs_id_pedido); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="logs_argumento" class="col-sm-2 control-label"><?php _t("Argumento"); ?></label> 
     <div class="col-sm-10"> 
       <textarea disabled class="form-control" name="logs_argumento" id="logs_argumento" placeholder="<?php _t("Argumento"); ?>"><?php echo $logs_argumento; ?></textarea> 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=logs&c=txt&logs_id=<?php echo $logs_id; ?>">Formato texto</a> 
