<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Codigo"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
<th><?php _t("Orden"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "reserva_estatus", $_usuarios_grupo)){
             //   include "./reserva_estatus/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
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
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "reserva_estatus", $_usuarios_grupo)){
             //   include "./reserva_estatus/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


