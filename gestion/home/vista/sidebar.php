<div class="col-sm-3 col-md-2 sidebar">

    
        <?php 
        logo();
        ?>
    


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
            
          <?php _menu_sidebar($p); ?>
            

            
            
            
        <?php } ?>                    
        <?php
      //  _menu_sidebar($p);
        ?>                        
    </ul>         

    
    
    <footer>
        <?php //echo $config_direccion; ?>
        <br>
        <br>
        <!--<p><a href="http://www.facturas.be">Facturas.be</a></p>-->
    </footer>
</div> 							
