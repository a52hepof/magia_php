<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "clientes", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=clientes&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="clientes">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="clientes_id" value="<?php echo $clientes_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="clientes_tipo_documento" value="<?php echo $clientes_tipo_documento; ?>" placeholder="<?php _t("Tipo_documento"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_ruc_prefijo" value="<?php echo $clientes_ruc_prefijo; ?>" placeholder="<?php _t("Ruc_prefijo"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_numero_documento" value="<?php echo $clientes_numero_documento; ?>" placeholder="<?php _t("Numero_documento"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_empresa" value="<?php echo $clientes_empresa; ?>" placeholder="<?php _t("Empresa"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_cliente" value="<?php echo $clientes_cliente; ?>" placeholder="<?php _t("Cliente"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_saludo" value="<?php echo $clientes_saludo; ?>" placeholder="<?php _t("Saludo"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_direccion" value="<?php echo $clientes_direccion; ?>" placeholder="<?php _t("Direccion"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_cpostal" value="<?php echo $clientes_cpostal; ?>" placeholder="<?php _t("Cpostal"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_ciudad" value="<?php echo $clientes_ciudad; ?>" placeholder="<?php _t("Ciudad"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_provincia" value="<?php echo $clientes_provincia; ?>" placeholder="<?php _t("Provincia"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_pais" value="<?php echo $clientes_pais; ?>" placeholder="<?php _t("Pais"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_tel" value="<?php echo $clientes_tel; ?>" placeholder="<?php _t("Tel"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_fax" value="<?php echo $clientes_fax; ?>" placeholder="<?php _t("Fax"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_email" value="<?php echo $clientes_email; ?>" placeholder="<?php _t("Email"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_notas" value="<?php echo $clientes_notas; ?>" placeholder="<?php _t("Notas"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_tipo" value="<?php echo $clientes_tipo; ?>" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_fecha_registro" value="<?php echo $clientes_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_es_cliente" value="<?php echo $clientes_es_cliente; ?>" placeholder="<?php _t("Es_cliente"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_estrellas" value="<?php echo $clientes_estrellas; ?>" placeholder="<?php _t("Estrellas"); ?>"></td> 
 <td><input class="form-control" type="text" name="clientes_estatus" value="<?php echo $clientes_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 