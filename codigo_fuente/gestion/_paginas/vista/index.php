<?php /**
  magia_version: 0.0.8
 * */ ?>
<?php // include "tabs.php";     ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Páginas"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_paginas&c=crear"> <?php _t("Nueva"); ?></a>
</h2>
<?php echo _t("Items"); ?>: 
<?php echo _paginas_total(); ?>

<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>

            <th><?php echo _t("Página"); ?></th> 
            <?php
            foreach (_grupos_array() as $key => $value) {
                echo '<th>' . _tr($value) . '</th>';
            }
            ?>


            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "_paginas", $_usuarios_grupo)) {
            //   include "./_paginas/vista/tr_buscar.php";
        }
        ?>


        <?php
        $i = 1;
        while ($_paginas = mysql_fetch_array($sql)) {
            include "./_paginas/reg/reg.php";
            if (permisos_tiene_permiso("editar", "_paginas", $_usuarios_grupo)) {
                include "./_paginas/vista/tr.php";
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
                echo '<th>' . _tr($value) . '</th>';
            }
            ?>
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </tfoot>
    <?php
    if (permisos_tiene_permiso("crear", "_paginas", $_usuarios_grupo)) {
        //   include "./_paginas/vista/tr_anadir.php";
    }
    ?>


</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>

<?php
/*

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
  </div>
  <div class="modal-body">





  <form class="form-horizontal">


  <div class="form-group">
  <label for="grupo" class="col-sm-2 control-label"><?php _t('Grupo'); ?></label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="inputEmail3" placeholder="grupo">
  </div>
  </div>


  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
  <div class="col-sm-10">
  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
  </div>
  </div>


  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <div class="checkbox">
  <label>
  <input type="checkbox"> Ver
  </label>
  </div>
  </div>
  </div>

  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <div class="checkbox">
  <label>
  <input type="checkbox"> Crear
  </label>
  </div>
  </div>
  </div>

  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <div class="checkbox">
  <label>
  <input type="checkbox"> Editar
  </label>
  </div>
  </div>
  </div>

  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <div class="checkbox">
  <label>
  <input type="checkbox"> Borrar
  </label>
  </div>
  </div>
  </div>


  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="btn btn-default">Sign in</button>
  </div>
  </div>
  </form>







  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
  </div>
  </div>
  </div>
  </div> */
?>