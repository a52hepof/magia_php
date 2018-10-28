<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>


<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="parkings"> 
<input type="hidden" name="c" value="buscar"> 




     <div class="form-group"> 
     <label for="parkings_barrio" class="col-sm-2 control-label"><?php _t("Barrio");?></label> 
       
     <select class="form-control" name="parkings_barrio">
         <?php 
        foreach (parkings_array_segun_campo("DISTINCT barrio") as $key => $value) {
            echo "<option value=\"$value\">$value</option>"; 
        }
         ?>
     </select>
   </div> 


   



       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 

