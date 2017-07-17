<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("test"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=test&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php test_thead(); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "test", $_usuarios_grupo)){
             //   include "./test/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($test = mysql_fetch_array($sql)) {

                    include "./test/reg/reg.php";

                    $campo_disponibles = test_campos_disponibles();

                    echo "<tr>";
                    include "./test/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "test", $_usuarios_grupo)){
                            //   include "./test/vista/tr_anadir.php";

                           }
                  ?>
                   <?php test_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>