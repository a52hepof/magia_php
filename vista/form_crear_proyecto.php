<?php
include "header.php"; ?>

<form class="form-horizontal" method="get" action="index.php">
    <input type="hidden" name="p" value="crear_proyecto">
    <input type="hidden" name="a" value="crear">
    
  <div class="form-group">
    <label for="nombreProyecto" class="col-sm-2 control-label"><?php _t("Nombre del proyecto"); ?></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="nombreProyecto" name="nombreProyecto" placeholder="Mi super web">
    </div>
  </div>
    
    
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Crear</button>
    </div>
  </div>
    
    
    
</form>


<?php
include "footer.php"; ?>