<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Buscar"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="get"> 
<input type="hidden" name="p" value="reservaciones"> 
<input type="hidden" name="c" value="buscar"> 
 <div class="form-group"> 
     <label for="reservaciones_id_parking" class="col-sm-2 control-label"><?php _t("Parking"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="reservaciones_id_parking" >
        <?php parkings_add($reservaciones_id_parking); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservaciones_placa" class="col-sm-2 control-label"><?php _t("Placa"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reservaciones_placa" id="reservaciones_placa" placeholder="<?php _t("Placa"); ?>" value=""   > 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#reservaciones_fecha_i" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="reservaciones_fecha_i" class="col-sm-2 control-label"><?php _t("Fecha i"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="reservaciones_fecha_i" id="reservaciones_fecha_i" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservaciones_hora_i" class="col-sm-2 control-label"><?php _t("Hora i"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="reservaciones_hora_i" id="reservaciones_hora_i" placeholder="<?php _t("Hora i"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="reservaciones_id_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="reservaciones_id_estatus" >
        <?php autos_add($reservaciones_id_estatus); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
     </div> 
   </div> 
 </form> 
