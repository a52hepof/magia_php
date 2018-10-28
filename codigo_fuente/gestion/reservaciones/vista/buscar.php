<?php /**
  magia_version: 0.0.11
 * 
*/
 ?> 
  
  <h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Buscar reservaciones"); ?> 
<?php 
/*    <a type="button" class="btn btn-primary navbar-btn" href="?p=reservaciones&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>*/
?>
</h2>
<?php //include "tabs.php";  ?>









<?php
//include "./reservaciones/vista/menu2.php";
?>




<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>
            <th>ID</th>
            <th><?php ordenpor("index.php?p=$p", "Parking", "parking", $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", "Placa", "placa", $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", "Fecha i", "fecha i", $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", "Hora i", "hora i", $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", "Estatus", "estatus", $orden); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tfoot>
        <tr> 
            <th>#</th>
            <th>ID</th>
            <th><?php ordenpor("index.php?p=$p", "Parking", "parking", $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", "Placa", "placa", $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", "Fecha i", "fecha i", $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", "Hora i", "hora i", $orden); ?></th> 
            <th><?php ordenpor("index.php?p=$p", "Estatus", "estatus", $orden); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </tfoot><tbody>

        <?php
        if (permisos_tiene_permiso("ver", "reservaciones", $_usuarios_grupo)) {
            //   include "./reservaciones/vista/tr_buscar.php";
        }
        ?><?php
        $i = 1;
        while ($reservaciones = mysql_fetch_array($sql)) {
            include "./reservaciones/reg/reg.php";
            if (permisos_tiene_permiso("editar", "reservaciones", $_usuarios_grupo)) {
                include "./reservaciones/vista/tr.php";
                // include "./reservaciones/vista/tr_editar.php";
            } else {
                include "./reservaciones/vista/tr.php";
            }
            $i++;
        }
        ?></tbody>
        <?php
        if (permisos_tiene_permiso("crear", "reservaciones", $_usuarios_grupo)) {
            //   include "./reservaciones/vista/tr_anadir.php";
        }
        ?></table> 

    <?php
        //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
        echo paginacion_master($p, $c, $total_items, $pag);
        ?>

<?php /*<a href="pdf.php?p=<?php echo $p; ?>">PDF</a>*/?>