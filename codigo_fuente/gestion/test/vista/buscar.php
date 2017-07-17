<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Nombre"); ?></th> 
<th><?php _t("Apellidos"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "test", $_usuarios_grupo)){
             //   include "./test/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($test = mysql_fetch_array($sql)) {
            include "./test/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "test", $_usuarios_grupo)){
                    include "./test/vista/tr.php";
                   // include "./test/vista/tr_editar.php";
                }else{
                    include "./test/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "test", $_usuarios_grupo)){
             //   include "./test/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


