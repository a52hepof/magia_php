<h3> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Contactos"); ?> 

    <?php
    if (permisos_tiene_permiso('crear', $p, $_usuarios_grupo)) {
        echo '<a type="button" class="btn btn-primary navbar-btn btn-xs" href="?p=contactos&c=crear">' . _tr("Nuevo") . '</a> ';
    }
    ?>    
</h3>

<div class="container">
    <div class="row">
        <?php
        $i = 1;
        while ($contactos = mysql_fetch_array($sql)) {
            include "./contactos/reg/reg.php";

            // solo el root puede ver al root
            if (_usuarios_campo_segun_email("grupo", $contactos['email']) != 'root' || $_usuarios_grupo == 'root') {
                include "./contactos/vista/tr_grilla.php";
            }
            $i++;
        }
        ?>
    </div>
</div>








<form class="navbar-form navbar-left">
    <?php
    if (contactos_total_segun_estatus(-1)) {
        echo '<a href="index.php?p=contactos&c=borrados">' . _tr('Borrados') . ' ' . contactos_total_segun_estatus(-1) . '</a>';
    }


    $g = _grupos_array_grupos();

    $i = 0;
    while ($i < count(_grupos_array_grupos())) {
        // echo ucfirst(_tr($g[$i]));
        // echo "(" . _usuarios_total_segun_grupo($g[$i]) . ")  ";
        $i++;
    }
    ?>

</form>





<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>
























