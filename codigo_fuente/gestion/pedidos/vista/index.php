<?php  include "tabs.php"; ?>


<h3> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Pedidos"); ?>
    <a type="button" class="btn btn-primary navbar-btn" href="?p=pedidos&c=crear"> <?php _t("Nuevo"); ?></a>
    <?php
    include "form_buscar_por_id.php";
    ?>
</h3>






<?php
pedidos_menu_segun_estatus();
?>







<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>
            <th><?php echo _t("Bon n°"); ?></th>             
            <th><?php echo _t("Empresa"); ?></th> 
            <th><?php echo _t("Contacto"); ?></th> 
            <th><?php echo _t("Fecha"); ?></th>                       
            <th><?php echo _t("Estatus"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "pedidos", $_usuarios_grupo)) {
            //   include "./pedidos/vista/tr_buscar.php";
        }
        ?>


        <?php
        $i = 1;
        while ($pedidos = mysql_fetch_array($sql)) {
            include "./pedidos/reg/reg.php";
            include "./pedidos/vista/tr.php";
            $i++;
        }
        ?>
    </tbody>
    <tfoot>
                <tr> 
            <th>#</th>
            <th><?php echo _t("Bon n°"); ?></th>             
            <th><?php echo _t("Empresa"); ?></th> 
            <th><?php echo _t("Contacto"); ?></th> 
            <th><?php echo _t("Fecha"); ?></th> 
                      
            <th><?php echo _t("Estatus"); ?></th> 
        </tr>
    </tfoot>
    <?php
    if (permisos_tiene_permiso("crear", "pedidos", $_usuarios_grupo)) {
        //   include "./pedidos/vista/tr_anadir.php";
    }
    ?>


</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>