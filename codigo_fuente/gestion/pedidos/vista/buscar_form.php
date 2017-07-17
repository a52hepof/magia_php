

<h2>
    <span class="glyphicon glyphicon-search"></span>
    <?php _t("Busqueda detallada"); ?> 
</h2> 



<form class="" action="index.php" method="get"> 
    <input type="hidden" name="p" value="pedidos"> 
    <input type="hidden" name="c" value="buscar"> 


    <div class="form-group"> 
        <label for="pedidos_id" class="col-sm-2 control-label"><?php _t("Id"); ?></label>                 
        <input type="number" class="form-control" name="pedidos_id" id="pedidos_id" placeholder="<?php _t("123, sin ceros al inicio"); ?> "> 

    </div> 

    <div class="form-group"> 
        <label for="pedidos_ref" class="col-sm-2 control-label"><?php _t("Ref"); ?></label> 


        <input type="text" class="form-control" name="pedidos_ref" id="pedidos_ref" placeholder="<?php _t("Ref"); ?> "> 

    </div> 


    <div class="form-group"> 
        <label for="pedidos_empresa" class="col-sm-2 control-label"><?php _t("Empresa"); ?></label> 
        <input type="text" class="form-control" name="pedidos_empresa" id="pedidos_empresa" placeholder="<?php _t("Empresa"); ?> "> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
        <input type="text" class="form-control" name="pedidos_contacto" id="pedidos_contacto" placeholder="<?php _t("Contacto"); ?> "> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
        <input type="email" class="form-control" name="pedidos_email" id="pedidos_email" placeholder="<?php _t("Email"); ?> "> 
    </div> 

<?php 
/*
    <div class="form-group"> 
        <label for="pedidos_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
        <input 
            type="text" 
            class="form-control" 
            name="pedidos_descripcion" 
            id="pedidos_descripcion" 
            placeholder="<?php _t("Descripcion"); ?> "
            > 
    </div> */
?>


    <div class="form-group"> 
        <label for="pedidos_fecha" class="col-sm-2 control-label"><?php _t("Fecha"); ?></label> 
        <input 
            type="text" 
            class="form-control" 
            name="pedidos_fecha" 
            id="pedidos_fecha" 
            placeholder="2017-12-31"> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
        <input type="text" class="form-control" name="pedidos_notas" id="pedidos_notas" placeholder="<?php _t("Notas"); ?> "> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <select class="form-control" name="pedidos_estatus">
            <?php pedidos_estatus_add(); ?>
        </select>
    </div> 


    <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
</form> 
