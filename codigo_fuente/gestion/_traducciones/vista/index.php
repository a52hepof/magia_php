<?php //include "tabs.php";   ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("Lista de _traducciones"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=_traducciones&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

Exportar <a href="index.php?p=_traducciones&c=export_sql">sql</a> 
Exportar <a href="index.php?p=_traducciones&c=export_cvs">cvs</a> 
Exportar <a href="index.php?p=_traducciones&c=export_google">google</a> 



<form class="form-inline">
    
    
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <select class="form-control">
        <option>Espanol</option>
    </select>
  </div>

    
  <button type="submit" class="btn btn-default"><?php _t('Cambiar');?></button>
</form>

<table class="table table-striped">
    <thead>
        <tr> 
            <th><?php echo _t("Frase"); ?></th> 
            <th><?php echo _t("Idioma"); ?></th> 
            <th><?php echo _t("Traduccion"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>


        <?php
        $i = 1;
        while ($reg = mysql_fetch_array($sql)) {
            //include "./_traducciones/reg/reg.php";
            include "./_traducciones/vista/tr.php";
            $i++;
        }
        ?>
    </tbody>
</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>


