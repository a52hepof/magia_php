<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php //include "tabs.php";      ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _contenido"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_contenido&c=crear"> <?php _t("Nueva"); ?></a>
</h2>
<a href="?p=_contenido"><?php _t('Index'); ?></a> | 
<a href="?p=_contenido&c=correccion"><?php _t('Correcciones'); ?></a> | 
<a href="?p=_contenido&c=atraducir"><?php _t('No traducidas'); ?></a> | 
<?php
include "form_buscar.php";
?>



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1 col-md-3 col-lg-3">


            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <?php _t("No traducidas"); ?>
                </a>
                <?php
                foreach (_idiomas_array() as $key => $idioma) {
                    echo '<a href="index.php?p=_contenido&c=buscar&_contenido_idioma=' . $idioma . '" class="list-group-item">' . $idioma . '</a>';
                }
                ?>
            </div>

        </div>
        <div class="col-sm-11 col-md-9 col-lg-9">


            <table class="table table-striped">
                <thead>
                    <tr> 
                        <th>#</th>

                        <th><?php echo _t("Frase"); ?></th> 
                        <th><?php echo _t("Contexto"); ?></th> 
                        <th><?php echo _t("Idiomas"); ?></th> 
                        <th><?php echo _t("Accion"); ?></th> 
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if (permisos_tiene_permiso("ver", "_contenido", $_usuarios_grupo)) {
                        //   include "./_contenido/vista/tr_buscar.php";
                    }
                    ?>


                    <?php
                    $i = 1;
                    while ($_contenido = mysql_fetch_array($sql)) {
                        include "./_contenido/reg/reg.php";

                        $idiomas = _idiomas_array();

                        foreach ($idiomas as $idioma) {
                            if (!_traducciones_segun_idioma_frase($idioma, $_contenido_frase)) {
                                include "./_contenido/vista/tr_atraducir.php";
                            }
                        }








                        $i++;
                    }
                    ?>
                </tbody>
                <?php
                if (permisos_tiene_permiso("crear", "_contenido", $_usuarios_grupo)) {
                    //   include "./_contenido/vista/tr_anadir.php";
                }
                ?>


            </table> 


        </div>

    </div>
</div>
<?php
//echo paginacion_master($p, $c, $total_items, $pag);
?>