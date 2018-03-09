<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php // include "tabs.php";  ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _menu"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_menu&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>            
            <th><?php ordenpor("index.php?p=$p", 'Ubicación', 'ubicacion', $orden);?></th> 
            <th><?php ordenpor("index.php?p=$p", 'Padre', 'padre', $orden);?></th>             
            <th><?php ordenpor("index.php?p=$p", 'Label', 'label', $orden);?></th>             
            <th><?php ordenpor("index.php?p=$p", 'Url', 'url', $orden);?></th>             
            <th><?php ordenpor("index.php?p=$p", 'Icono', 'icono', $orden);?></th>             
            <th><?php ordenpor("index.php?p=$p", 'Orden', 'orden', $orden);?></th>             
            
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_menu", $_usuarios_grupo)) {
            include "./_menu/vista/tr_buscar.php";
        }
        ?>


<?php
$i = 1;
while ($_menu = mysql_fetch_array($sql)) {
    include "./_menu/reg/reg.php";
    if (permisos_tiene_permiso("editar", "_menu", $_usuarios_grupo)) {
        include "./_menu/vista/tr.php";
        // include "./_menu/vista/tr_editar.php";
    } else {
        include "./_menu/vista/tr.php";
    }
    $i++;
}
?>
    </tbody>
        <?php
        if (permisos_tiene_permiso("crear", "_menu", $_usuarios_grupo)) {
            include "./_menu/vista/tr_anadir.php";
        }
        ?>


</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>