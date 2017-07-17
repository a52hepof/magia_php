<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="test"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="test_id" value="<?php echo $test_id; ?>"> 
 <div class="form-group"> 
     <label for="test_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="test_nombre" id="test_nombre" placeholder="<?php _t("Nombre"); ?>" value="<?php echo $test_nombre; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="test_apellidos" class="col-sm-2 control-label"><?php _t("Apellidos"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="test_apellidos" id="test_apellidos" placeholder="<?php _t("Apellidos"); ?>" value="<?php echo $test_apellidos; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=test&c=txt&test_id=<?php echo $test_id; ?>">Formato texto</a> 
