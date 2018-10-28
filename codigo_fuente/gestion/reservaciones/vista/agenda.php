<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 
    <?php echo _t("Reservaciones"); ?> 
</h2>



fecha > parking > hora > 




<table class="table table-bordered">

  

    <tbody>
      


        <?php
        for ($i = 0; $i < 7; $i++) {
            echo '<td>
            
            ' . reservaciones_segun_fecha(sumar_dias($reservaciones_fecha_i, $i)) . '
             
            
             
            </td></tr>
        ';
        }
        ?>


    </tbody>


</table> 


