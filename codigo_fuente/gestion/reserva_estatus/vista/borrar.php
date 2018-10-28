<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=reserva_estatus&c=borrar&reserva_estatus_id=<?php echo $reserva_estatus_id; ?>"><?php _t("Si,borrar"); ?></a>