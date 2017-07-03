<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("Lista de logs"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=logs&c=crear"> <?php _t("Nueva"); ?></a>
</h2>

<table class="table table-striped">
    <thead>
        <tr> 
        <th>#</th>

 <th><?php echo _t("Fecha"); ?></th> 
 <th><?php echo _t("Usuario"); ?></th> 
 <th><?php echo _t("P"); ?></th> 
 <th><?php echo _t("C"); ?></th> 
 <th><?php echo _t("A"); ?></th> 
 <th><?php echo _t("Pedido"); ?></th> 
 <th><?php echo _t("Argumento"); ?></th> 
 <th><?php echo _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "logs", $_usuarios_grupo)){
             //   include "./logs/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($logs = mysql_fetch_array($sql)) {
            include "./logs/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "logs", $_usuarios_grupo)){
                    include "./logs/vista/tr.php";
                   // include "./logs/vista/tr_editar.php";
                }else{
                    include "./logs/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "logs", $_usuarios_grupo)){
             //   include "./logs/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>
