<?php /**
  magia_version: 0.0.8
 * */ ?>
<h1> 
    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Detalles"); ?> 
</h1> 
<form class="form-horizontal" method="" action=""> 
    <input type="hidden" name="p" value="clientes"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="clientes_id" value="<?php echo $clientes_id; ?>"> 
    
    <div class="form-group"> 
        <label for="clientes_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_idioma" id="clientes_idioma" placeholder="<?php _t("Idioma"); ?>" value="<?php echo $clientes_idioma; ?>"  disabled > 
        </div> 
    </div> 
    <div class="form-group"> 
        <label for="clientes_tipo_documento" class="col-sm-2 control-label"><?php _t("Tipo documento"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_tipo_documento" id="clientes_tipo_documento" placeholder="<?php _t("Tipo documento"); ?>" value="<?php echo $clientes_tipo_documento; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_ruc_prefijo" class="col-sm-2 control-label"><?php _t("Ruc prefijo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_ruc_prefijo" id="clientes_ruc_prefijo" placeholder="<?php _t("Ruc prefijo"); ?>" value="<?php echo $clientes_ruc_prefijo; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_numero_documento" class="col-sm-2 control-label"><?php _t("Numero documento"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_numero_documento" id="clientes_numero_documento" placeholder="<?php _t("Numero documento"); ?>" value="<?php echo $clientes_numero_documento; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_empresa" class="col-sm-2 control-label"><?php _t("Empresa"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_empresa" id="clientes_empresa" placeholder="<?php _t("Empresa"); ?>" value="<?php echo $clientes_empresa; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_saludo" class="col-sm-2 control-label"><?php _t("Saludo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_saludo" id="clientes_saludo" placeholder="<?php _t("Saludo"); ?>" value="<?php echo $clientes_saludo; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_cliente" class="col-sm-2 control-label"><?php _t("Cliente"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_cliente" id="clientes_cliente" placeholder="<?php _t("Cliente"); ?>" value="<?php echo $clientes_cliente; ?>"  disabled > 
        </div> 
    </div> 




    <hr>
    <div class="form-group"> 
        <label for="clientes_direccion" class="col-sm-2 control-label"><?php _t("Direccion"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_direccion" id="clientes_direccion" placeholder="<?php _t("Direccion"); ?>" value="<?php echo $clientes_direccion; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_cpostal" class="col-sm-2 control-label"><?php _t("Cpostal"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_cpostal" id="clientes_cpostal" placeholder="<?php _t("Cpostal"); ?>" value="<?php echo $clientes_cpostal; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_ciudad" class="col-sm-2 control-label"><?php _t("Ciudad"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_ciudad" id="clientes_ciudad" placeholder="<?php _t("Ciudad"); ?>" value="<?php echo $clientes_ciudad; ?>"  disabled > 
        </div> 
    </div> 


    <?php /* <div class="form-group"> 
      <label for="clientes_provincia" class="col-sm-2 control-label"><?php _t("Provincia"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="clientes_provincia" id="clientes_provincia" placeholder="<?php _t("Provincia"); ?>" value="<?php echo $clientes_provincia; ?>"  disabled >
      </div>
      </div>
     */ ?>

    <div class="form-group"> 
        <label for="clientes_pais" class="col-sm-2 control-label"><?php _t("Pais"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_pais" id="clientes_pais" placeholder="<?php _t("Pais"); ?>" value="<?php echo $clientes_pais; ?>"  disabled > 
        </div> 
    </div> 

    <hr>
    <div class="form-group"> 
        <label for="clientes_tel" class="col-sm-2 control-label"><?php _t("Tel"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_tel" id="clientes_tel" placeholder="<?php _t("Tel"); ?>" value="<?php echo $clientes_tel; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_fax" class="col-sm-2 control-label"><?php _t("Fax"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_fax" id="clientes_fax" placeholder="<?php _t("Fax"); ?>" value="<?php echo $clientes_fax; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="clientes_email" id="clientes_email" placeholder="<?php _t("Email"); ?>" value="<?php echo $clientes_email; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
        <div class="col-sm-10"> 
            <textarea disabled class="form-control" name="clientes_notas" id="clientes_notas" placeholder="<?php _t("Notas"); ?>"><?php echo $clientes_notas; ?></textarea> 
        </div> 
    </div> 

    <?php /*
      <div class="form-group">
      <label for="clientes_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="clientes_tipo" id="clientes_tipo" placeholder="<?php _t("Tipo"); ?>" value="<?php echo $clientes_tipo; ?>"  disabled >
      </div>
      </div>


      <script>
      $( function() {
      $( "#clientes_fecha_registro" ).datepicker();
      } );
      </script>
      <div class="form-group">
      <label for="clientes_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha registro"); ?></label>
      <div class="col-sm-3">
      <div class="input-group">
      <input type="text" class="form-control" name="clientes_fecha_registro" id="clientes_fecha_registro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value="<?php echo $clientes_fecha_registro; ?>"  disabled >
      <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
      </div>
      </div>
      </div>


      <div class="form-group">
      <label for="clientes_es_cliente" class="col-sm-2 control-label"><?php _t("Es cliente"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="clientes_es_cliente" id="clientes_es_cliente" placeholder="<?php _t("Es cliente"); ?>" value="<?php echo $clientes_es_cliente; ?>"  disabled >
      </div>
      </div>


      <div class="form-group">
      <label for="clientes_estrellas" class="col-sm-2 control-label"><?php _t("Estrellas"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="clientes_estrellas" id="clientes_estrellas" placeholder="<?php _t("Estrellas"); ?>" value="<?php echo $clientes_estrellas; ?>"  disabled >
      </div>
      </div>

     */ ?>


    <div class="form-group"> 
        <label for="" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="" id="" 
                value="<?php echo ucfirst(_usuarios_campo_segun_email("grupo", $clientes_email)); ?>"  disabled > 
        </div> 
    </div> 




    <div class="form-group"> 
        <label for="clientes_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <div class="col-sm-10"> 
            <div class="radio">
                <label>
                    <input disabled type="radio" name="clientes_estatus" value="1" <?php echo "$clientes_estatus_1"; ?>  >
                    <?php _t("Activo, puede realizar pedidos"); ?> 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input disabled type="radio" name="clientes_estatus" value="0"  <?php echo "$clientes_estatus_0"; ?>  >
                    <?php _t("Bloqueado, No puede realizar pedidos"); ?>  
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
<a href="index.php?p=clientes&c=txt&clientes_id=<?php echo $clientes_id; ?>">Formato texto</a> 
