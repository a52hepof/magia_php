<?php /**
  magia_version: 0.0.11
 * */ ?>
<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Parkings"); ?> 
    <a type="button" class="btn btn-primary navbar-btn" href="?p=parkings&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
</h2>
<?php 
//echo var_dump(parkings_array_segun_campo('DISTINCT direccion', "barrio = 'Louise'"));
?>
<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>
            <th><?php ordenpor("index.php?p=$p", _t("Contacto"), _tr("id_contacto"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Direccion"), _tr("direccion"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Numero"), _tr("numero"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Cpostal"), _tr("cpostal"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Barrio"), _tr("barrio"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Comuna"), _tr("comuna"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Ciudad"), _tr("ciudad"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Pais"), _tr("pais"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Precio hora"), _tr("precio_hora"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Orden"), _tr("orden"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Estatus"), _tr("estatus"), $orden); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tfoot>
        <tr> 
            <th>#</th>
            <th><?php ordenpor("index.php?p=$p", _t("Contacto"), _tr("id_contacto"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Direccion"), _tr("direccion"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Numero"), _tr("numero"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Cpostal"), _tr("cpostal"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Barrio"), _tr("barrio"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Comuna"), _tr("comuna"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Ciudad"), _tr("ciudad"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Pais"), _tr("pais"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Precio hora"), _tr("precio_hora"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Orden"), _tr("orden"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Estatus"), _tr("estatus"), $orden); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </tfoot><tbody>

        <?php
        if (permisos_tiene_permiso("ver", "parkings", $_usuarios_grupo)) {
            //   include "./parkings/vista/tr_buscar.php";
        }
        ?><?php
        $i = 1;
        while ($parkings = mysql_fetch_array($sql)) {
            include "./parkings/reg/reg.php";
            if (permisos_tiene_permiso("editar", "parkings", $_usuarios_grupo)) {
                include "./parkings/vista/tr.php";
                // include "./parkings/vista/tr_editar.php";
            } else {
                include "./parkings/vista/tr.php";
            }
            $i++;
        }
        ?></tbody>
        <?php
        if (permisos_tiene_permiso("crear", "parkings", $_usuarios_grupo)) {
            //   include "./parkings/vista/tr_anadir.php";
        }
        ?></table> 

    <?php
        //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
        echo paginacion_master($p, $c, $total_items, $pag);
        ?><a href="pdf.php?p=<?php echo $p; ?>">PDF</a>