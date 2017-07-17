<?php /**
  magia_version: 0.0.8
 * */ ?>
<h1> 
    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Detalles"); ?> 
</h1> 
<form class="form-horizontal" method="" action=""> 
    <input type="hidden" name="p" value="pedidos"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="pedidos_id" value="<?php echo $pedidos_id; ?>"> 
    <div class="form-group"> 
        <label for="pedidos_ref" class="col-sm-2 control-label"><?php _t("Ref"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="pedidos_ref" id="pedidos_ref" placeholder="<?php _t("Ref"); ?>" value="<?php echo $pedidos_ref; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_empresa" class="col-sm-2 control-label"><?php _t("Empresa"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="pedidos_empresa" id="pedidos_empresa" placeholder="<?php _t("Empresa"); ?>" value="<?php echo $pedidos_empresa; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="pedidos_contacto" id="pedidos_contacto" placeholder="<?php _t("Contacto"); ?>" value="<?php echo $pedidos_contacto; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="pedidos_email" id="pedidos_email" placeholder="<?php _t("Email"); ?>" value="<?php echo $pedidos_email; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
        
        <div class="col-sm-10"> 
            <pre><code><?php echo $pedidos_descripcion; ?>
            </code></pre>
            <textarea 
                rows="10"
                 class="form-control" 
                name="pedidos_descripcion" 
                id="pedidos_descripcion" 
                placeholder="<?php _t("Descripcion"); ?>"><?php echo $pedidos_descripcion; ?></textarea> 
        </div> 
    </div> 


    <script>
        $(function () {
            $("#pedidos_fecha").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="pedidos_fecha" class="col-sm-2 control-label"><?php _t("Fecha"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group"> 
                <input type="text" class="form-control" name="pedidos_fecha" id="pedidos_fecha" placeholder="<?php _t("aaaa-mm-dd"); ?>" value="<?php echo $pedidos_fecha; ?>"  disabled > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
        <div class="col-sm-10"> 
            <textarea disabled class="form-control" name="pedidos_notas" id="pedidos_notas" placeholder="<?php _t("Notas"); ?>"><?php echo $pedidos_notas; ?></textarea> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="pedidos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <div class="col-sm-10"> 
            <div class="radio">
                <label>
                    <input disabled type="radio" name="pedidos_estatus" value="1" <?php echo "$pedidos_estatus_1"; ?>  >
                    <?php _t("Activo"); ?> 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input disabled type="radio" name="pedidos_estatus" value="0"  <?php echo "$pedidos_estatus_0"; ?>  >
                    <?php _t("Bloqueado"); ?>  
                </label>
            </div>
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
        </div> 
    </div>     
</form> 

<a href="index.php?p=pedidos&c=txt&pedidos_id=<?php echo $pedidos_id; ?>">Formato texto</a> 
