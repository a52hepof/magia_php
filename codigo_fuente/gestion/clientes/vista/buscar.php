<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php include "tabs.php"; ?>

<h2> 

    <span class="glyphicon glyphicon-search"></span> 

    <?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
            <th><?php _t("Tipo_documento"); ?></th> 
            <th><?php _t("Ruc_prefijo"); ?></th> 
            <th><?php _t("Numero_documento"); ?></th> 
            <th><?php _t("Empresa"); ?></th> 
            <th><?php _t("Cliente"); ?></th> 
            <th><?php _t("Saludo"); ?></th> 
            <th><?php _t("Direccion"); ?></th> 
            <th><?php _t("Cpostal"); ?></th> 
            <th><?php _t("Ciudad"); ?></th> 
            <th><?php _t("Provincia"); ?></th> 
            <th><?php _t("Pais"); ?></th> 
            <th><?php _t("Tel"); ?></th> 
            <th><?php _t("Fax"); ?></th> 
            <th><?php _t("Email"); ?></th> 
            <th><?php _t("Notas"); ?></th> 
            <th><?php _t("Tipo"); ?></th> 
            <th><?php _t("Fecha_registro"); ?></th> 
            <th><?php _t("Es_cliente"); ?></th> 
            <th><?php _t("Estrellas"); ?></th> 
            <th><?php _t("Estatus"); ?></th> 
            <th><?php _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "clientes", $_usuarios_grupo)) {
            //   include "./clientes/vista/tr_buscar.php";
        }
        ?>


<?php
$i = 1;
while ($clientes = mysql_fetch_array($sql)) {
    include "./clientes/reg/reg.php";
    if (permisos_tiene_permiso("editar", "clientes", $_usuarios_grupo)) {
        include "./clientes/vista/tr.php";
        // include "./clientes/vista/tr_editar.php";
    } else {
        include "./clientes/vista/tr.php";
    }
    $i++;
}
?>
    </tbody>
        <?php
        if (permisos_tiene_permiso("crear", "clientes", $_usuarios_grupo)) {
            //   include "./clientes/vista/tr_anadir.php";
        }
        ?>


</table> 


