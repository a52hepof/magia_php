<?php /**
  magia_version: 0.0.8
 * https://webdesign.tutsplus.com/tutorials/auto-formatting-input-value--cms-26745
 * */ ?>
<h2>

    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Nuevo cliente"); ?></h2> 

</h2> 



<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="clientes"> 
    <input type="hidden" name="c" value="crear"> 
    <input type="hidden" name="a" value="crear"> 
    <input type="hidden" name="clientes_es_cliente" value="null"> 
    <input type="hidden" name="clientes_estrellas" value="null"> 
    <input type="hidden" name="clientes_provincia" value="null"> 
    <input type="hidden" name="clientes_tipo" value="null"> 



    <div class="form-group"> 
        <label for="clientes_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <div class="col-sm-10"> 
            <select name="clientes_idioma" class="form-control">
                <?php _idiomas_add(); ?>
            </select>
        </div> 
    </div> 

    <div class="form-group"> 
        <label for="clientes_tipo_documento" class="col-sm-2 control-label"><?php _t("Tipo documento"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_tipo_documento" 
                id="clientes_tipo_documento" 
                placeholder="<?php _t("Tipo documento"); ?>" value="TVA"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_ruc_prefijo" class="col-sm-2 control-label"><?php _t("Ruc prefijo"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_ruc_prefijo" 
                id="clientes_ruc_prefijo" 
                placeholder="<?php _t("BE"); ?>" value="BE"   > 
        </div> 
    </div> 

    <div class="form-group"> 
        <label for="clientes_numero_documento" class="col-sm-2 control-label"><?php _t("TVA"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_numero_documento" 
                id="clientes_numero_documento" 
                placeholder="<?php _t("123.123.123"); ?>" value=""   > 
        </div> 
    </div> 












    <div class="form-group"> 
        <label for="clientes_empresa" class="col-sm-2 control-label"><?php _t("Empresa"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_empresa" 
                id="clientes_empresa" 
                placeholder="<?php _t("Empresa SPRL"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_saludo" class="col-sm-2 control-label"><?php _t("Saludo"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_saludo" 
                id="clientes_saludo" 
                placeholder="<?php _t("Sr. Sra. Srta. Dr. Dra. ..."); ?>" value="M."   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_cliente" class="col-sm-2 control-label"><?php _t("Cliente"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_cliente" 
                id="clientes_cliente" 
                placeholder="<?php _t("Nombres y apellidos"); ?>" value=""   > 
        </div> 
    </div> 







    <hr>

    <div class="form-group"> 
        <label for="clientes_direccion" class="col-sm-2 control-label"><?php _t("Dirección"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_direccion" 
                id="clientes_direccion" placeholder="<?php _t("Av. Louise 265"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_cpostal" class="col-sm-2 control-label"><?php _t("Código postal"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_cpostal" 
                id="clientes_cpostal" 
                placeholder="<?php _t("1000"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_ciudad" class="col-sm-2 control-label"><?php _t("Ciudad"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_ciudad" 
                id="clientes_ciudad" 
                placeholder="<?php _t("Bruxelles"); ?>" value=""   > 
        </div> 
    </div> 

    <?php /*
      <div class="form-group">
      <label for="clientes_provincia" class="col-sm-2 control-label"><?php _t("Provincia"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="clientes_provincia" id="clientes_provincia" placeholder="<?php _t("Provincia"); ?>" value=""   >
      </div>
      </div>
     */ ?>

    <div class="form-group"> 
        <label for="clientes_pais" class="col-sm-2 control-label"><?php _t("País"); ?></label> 
        <div class="col-sm-10"> 


            <input 
                type="text" 
                class="form-control" 
                name="clientes_pais" 
                id="clientes_pais" 
                placeholder="<?php _t("Belgique"); ?>" value="Belgique"   > 

        </div> 
    </div> 

    <hr>

    <div class="form-group"> 
        <label for="clientes_tel" class="col-sm-2 control-label"><?php _t("Tel"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_tel" 
                id="clientes_tel" 
                placeholder="<?php _t("+322123456"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="clientes_fax" class="col-sm-2 control-label"><?php _t("Fax"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_fax" 
                id="clientes_fax" 
                placeholder="<?php _t("+322123456"); ?>" value=""   > 
        </div> 
    </div> 






    <div class="form-group"> 
        <label for="clientes_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
        <div class="col-sm-10"> 
            <textarea  
                class="form-control" 
                name="clientes_notas" 
                id="clientes_notas" 
                placeholder="<?php _t("Notas"); ?>"></textarea> 
        </div> 
    </div> 

    <hr>

        <div class="form-group"> 
        <label for="clientes_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="email" 
                class="form-control" 
                name="clientes_email" 
                id="clientes_email" 
                placeholder="<?php _t("Usado para ingresar al sistema"); ?>" value=""   
                required=""
                > 

        </div> 
    </div> 

    <div class="form-group"> 
        <label for="clientes_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="clientes_grupo" >
                <?php _grupos_add("", "root"); ?>
            </select>
        </div>         
    </div> 







    <div class="form-group"> 
        <label for="clientes_clave" class="col-sm-2 control-label"><?php _t("Clave"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="clientes_clave" 
                id="clientes_clave" 
                placeholder="<?php _t("Clave"); ?>" value="<?php echo genera_clave(); ?>"   > 
        </div> 
    </div> 





    <?php /*
      <div class="form-group">
      <label for="clientes_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="clientes_tipo" id="clientes_tipo" placeholder="<?php _t("Tipo"); ?>" value=""   >
      </div>
      </div>


      <script>
      $(function () {
      $("#clientes_fecha_registro").datepicker();
      });
      </script>

      <div class="form-group">
      <label for="clientes_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha registro"); ?></label>
      <div class="col-sm-3">
      <div class="input-group">
      <input
      type="text"
      class="form-control"
      name="clientes_fecha_registro"
      id="clientes_fecha_registro"
      placeholder="<?php echo date("Y-m-d"); ?>" value="" readonly=""  >
      <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
      </div>
      </div>
      </div>


      <div class="form-group">
      <label for="clientes_es_cliente" class="col-sm-2 control-label"><?php _t("Es cliente"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="clientes_es_cliente" id="clientes_es_cliente" placeholder="<?php _t("Es cliente"); ?>" value=""   >
      </div>
      </div>


      <div class="form-group">
      <label for="clientes_estrellas" class="col-sm-2 control-label"><?php _t("Estrellas"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="clientes_estrellas" id="clientes_estrellas" placeholder="<?php _t("Estrellas"); ?>" value=""   >
      </div>
      </div>


      <div class="form-group">
      <label for="clientes_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label>
      <div class="col-sm-10">
      <div class="radio">
      <label>
      <input  type="radio" name="clientes_estatus" value="1" >
      <?php _t("Activo"); ?>
      </label>
      </div>
      <div class="radio">
      <label>
      <input  type="radio" name="clientes_estatus" value="0"  checked >
      <?php _t("Bloqueado"); ?>
      </label>
      </div>
      </div>
      </div>
     */ ?>

    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 
