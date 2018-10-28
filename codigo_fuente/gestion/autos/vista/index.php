<?php /**
  magia_version: 0.0.11
 * */ ?>
<?php //include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Autos"); ?> 
    <a type="button" class="btn btn-primary navbar-btn" href="?p=autos&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
</h2>
<table class="table table-striped">
    <thead>
        <tr> 
            
            <th><?php ordenpor("index.php?p=$p", _t("Placa"), _tr("placa"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Contacto"), _tr("id_contacto"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Estatus"), _tr("estatus"), $orden); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tfoot>
        <tr> 
            
            <th><?php ordenpor("index.php?p=$p", _t("Placa"), _tr("placa"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Contacto"), _tr("id_contacto"), $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", _t("Estatus"), _tr("estatus"), $orden); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </tfoot><tbody>

        <?php
        if (permisos_tiene_permiso("ver", "autos", $_usuarios_grupo)) {
            //   include "./autos/vista/tr_buscar.php";
        }
        ?><?php
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
        ?></tbody>
        <?php
        if (permisos_tiene_permiso("crear", "autos", $_usuarios_grupo)) {
            //   include "./autos/vista/tr_anadir.php";
        }
        ?></table> 

    <?php
        //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
        echo paginacion_master($p, $c, $total_items, $pag);
        ?>

<?php /*<a href="pdf.php?p=<?php echo $p; ?>">PDF</a>*/?>