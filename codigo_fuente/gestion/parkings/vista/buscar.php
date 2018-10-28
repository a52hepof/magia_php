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
<th><?php _t("Contacto"); ?></th> 
<th><?php _t("Direccion"); ?></th> 
<th><?php _t("Numero"); ?></th> 
<th><?php _t("Cpostal"); ?></th> 
<th><?php _t("Barrio"); ?></th> 
<th><?php _t("Comuna"); ?></th> 
<th><?php _t("Ciudad"); ?></th> 
<th><?php _t("Pais"); ?></th> 
<th><?php _t("Precio_hora"); ?></th> 
<th><?php _t("Orden"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "parkings", $_usuarios_grupo)){
             //   include "./parkings/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($parkings = mysql_fetch_array($sql)) {
            include "./parkings/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "parkings", $_usuarios_grupo)){
                    include "./parkings/vista/tr.php";
                   // include "./parkings/vista/tr_editar.php";
                }else{
                    include "./parkings/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "parkings", $_usuarios_grupo)){
             //   include "./parkings/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


