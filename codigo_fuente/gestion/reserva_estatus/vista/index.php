<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Reserva_estatus"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=reserva_estatus&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>
<table class="table table-striped">
<thead>
<tr> 
<th>#</th>
 <th><?php ordenpor("index.php?p=$p", _t("Codigo"), _tr("codigo"), $orden); ?></th> 
 <th><?php ordenpor("index.php?p=$p", _t("Estatus"), _tr("estatus"), $orden); ?></th> 
 <th><?php ordenpor("index.php?p=$p", _t("Orden"), _tr("orden"), $orden); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
                    </thead>
<tfoot>
                        <tr> 
                        <th>#</th>
 <th><?php ordenpor("index.php?p=$p", _t("Codigo"), _tr("codigo"), $orden); ?></th> 
 <th><?php ordenpor("index.php?p=$p", _t("Estatus"), _tr("estatus"), $orden); ?></th> 
 <th><?php ordenpor("index.php?p=$p", _t("Orden"), _tr("orden"), $orden); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
        </tfoot><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "reserva_estatus", $_usuarios_grupo)){
             //   include "./reserva_estatus/vista/tr_buscar.php";
                
            }
   ?><?php
        $i=1;
        while ($reserva_estatus = mysql_fetch_array($sql)) {
            include "./reserva_estatus/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "reserva_estatus", $_usuarios_grupo)){
                    include "./reserva_estatus/vista/tr.php";
                   // include "./reserva_estatus/vista/tr_editar.php";
                }else{
                    include "./reserva_estatus/vista/tr.php";
                }      
            $i++;    
        }
        ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "reserva_estatus", $_usuarios_grupo)){
                            //   include "./reserva_estatus/vista/tr_anadir.php";

                           }
                  ?></table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?><a href="pdf.php?p=<?php echo $p; ?>">PDF</a>