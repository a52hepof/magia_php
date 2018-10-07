<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php // include "tabs.php";        ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Páginas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_paginas&c=crear"> <?php _t("Nueva"); ?></a>
</h2>
<?php echo _t("Items"); ?>: 
<?php echo _paginas_total(); ?>






<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1 col-md-3 col-lg-3">


            <?php
            include "menu2.php";
            ?>

        </div>
        <div class="col-sm-11 col-md-9 col-lg-9">




            <table class="table table-striped">
                <thead>
                    <tr> 
                        <th>#</th>


                        <th><?php echo _t("Grupo"); ?></th> 
                        <th><?php echo _t("Página"); ?></th> 
                        <th><?php echo _t("Permisos"); ?></th> 
                        <?php
                        foreach (_grupos_array() as $key => $value) {
                            // echo '<th>' . _tr($value) . '</th>';
                        }
                        ?>
                        <th><?php echo _t("Accion"); ?></th> 
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if (permisos_tiene_permiso("ver", "_paginas", $_usuarios_grupo)) {
                        include "./_paginas/vista/tr_buscar.php";
                    }
                    ?>


                    <?php
                    $i = 1;
                    while ($_paginas = mysql_fetch_array($sql)) {
                        include "./_paginas/reg/reg.php";
                        if (permisos_tiene_permiso("editar", "_paginas", $_usuarios_grupo)) {
                            include "./_paginas/vista/tr2.php";
                            // include "./_paginas/vista/tr_editar.php";
                        } else {
                            include "./_paginas/vista/tr.php";
                        }
                        $i++;
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr> 
                        <th>#</th>

                        <th><?php echo _t("Página"); ?></th> 
                        <?php
                        foreach (_grupos_array() as $key => $value) {
                            //    echo '<th>' . _tr($value) . '</th>';
                        }
                        ?>


                        <th><?php echo _t("Accion"); ?></th> 
                    </tr>
                </tfoot>
                <?php
                if (permisos_tiene_permiso("crear", "_paginas", $_usuarios_grupo)) {
                    include "./_paginas/vista/tr_anadir.php";
                }
                ?>


            </table> 



        </div>

    </div>
</div>
<?php
//echo paginacion_master($p, $c, $total_items, $pag);
?>

