<?php /**
  magia_version: 0.0.11
 * */ ?>
<?php include "tabs.php"; ?>

<h2> 

    <span class="glyphicon glyphicon-search"></span> 

    <?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
            <th><?php _t("Placa"); ?></th> 
            <th><?php _t("Contacto"); ?></th> 
            <th><?php _t("Estatus"); ?></th> 
            <th><?php _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "autos", $_usuarios_grupo)) {
            //   include "./autos/vista/tr_buscar.php";
        }
        ?>


<?php
$i = 1;
while ($autos = mysql_fetch_array($sql)) {
    include "./autos/reg/reg.php";
    if (permisos_tiene_permiso("editar", "autos", $_usuarios_grupo)) {
        include "./autos/vista/tr.php";
        // include "./autos/vista/tr_editar.php";
    } else {
        include "./autos/vista/tr.php";
    }
    $i++;
}
?>
    </tbody>
        <?php
        if (permisos_tiene_permiso("crear", "autos", $_usuarios_grupo)) {
            //   include "./autos/vista/tr_anadir.php";
        }
        ?>


</table> 


