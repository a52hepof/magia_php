<div class="list-group">
                <a href="#" class="list-group-item active">
                    <?php _t("Menus"); ?>
                </a>
                <?php
                foreach (_grupos_array() as $key => $usuario) {
                    echo '<a href="index.php?p=_paginas&c=paginas_segun_grupo&_paginas_grupo=' . $usuario . '" class="list-group-item">' . $usuario . '</a>';
                }
                ?>
            </div>