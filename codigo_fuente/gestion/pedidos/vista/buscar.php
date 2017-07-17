
<?php include "tabs.php"; ?>

<h2> 

    <span class="glyphicon glyphicon-search"></span> 

    <?php _t("Resultados de su busqueda"); ?>

</h2>




<table class="table table-striped">
    <thead>
        <tr> 
            <th>#</th>

            <th><?php echo _t("Bon n°"); ?></th> 

            <th><?php echo _t("Empresa"); ?></th> 
            <th><?php echo _t("Contacto"); ?></th> 
            <th><?php echo _t("Fecha"); ?></th> 
            <th><?php echo _t("Estatus"); ?></th> 
            <th><?php echo _t("Accion"); ?></th> 
        </tr>
    </thead>
    <tbody>




        <?php
        $i = 1;
        

        
        while ($pedidos = mysql_fetch_array($sql)) {            
            include "./pedidos/reg/reg.php";
            include "./pedidos/vista/tr.php";
            $i++;
        }
        ?>
    </tbody>



</table> 


