<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=_paginas&c=borrar&_paginas_id=<?php echo $_paginas_id; ?>"><?php _t("Si,borrar"); ?></a>