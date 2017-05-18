<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <?php if (permisos_tiene_permiso("ver", "home", $_usuarios_grupo) == true) { ?>            
            <li <?php
            if ($p == "home") {
                echo " class=\"active\" ";
            }
            ?> >
                <a href="?p=home&c=index">
                    <span class="glyphicon glyphicon-folder-close"></span> 
            <?php _t("Inicio"); ?>
                </a>
            </li>
        <?php } ?>                    
        <?php
        _menu_sidebar($p);
        ?>                        
    </ul>         

    <footer>
    Magia_php version: <?php echo magia_version(); ?>
    </footer>
</div> 							
