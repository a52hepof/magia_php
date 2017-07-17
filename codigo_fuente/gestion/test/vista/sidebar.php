<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="test"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="test_nombre" class="col-sm-2 control-label"><?php _t("Nombre");?></label> 
       <input type="text" class="form-control" name="test_nombre" id="test_nombre" placeholder="<?php _t("Nombre"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="test_apellidos" class="col-sm-2 control-label"><?php _t("Apellidos");?></label> 
       <input type="text" class="form-control" name="test_apellidos" id="test_apellidos" placeholder="<?php _t("Apellidos"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
