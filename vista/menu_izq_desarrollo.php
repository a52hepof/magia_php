


<form method="get" action="index.php">
    <input type="hidden" name="p" value="maqueta_plugin">
    
    <div class="form-group">
        <label for="nombrePlugin"><?php _t("Tabla"); ?></label>
        <select class="form-control" name="nombrePlugin">

            <?php
            foreach (bdd_lista_tablas_bdd() as $key => $tablas) {
                echo '<option value="'.$tablas.'">'.$tablas.'</option>'; 
            }
            ?>            
        </select>
    </div>


    <button type="submit" class="btn btn-default"><?php _t("Cambiar"); ?></button>
</form>









<div class="list-group">
    <a href="#" class="list-group-item active">
        DESARROLLO
    </a>
    <a href="index.php?p=hacer" class="list-group-item">Hacer</a>
    <?php
    foreach (bdd_lista_tablas_bdd() as $key => $tablas) {
       // echo '<a href="index.php?p=maqueta_plugin&nombrePlugin=' . $tablas . '" class="list-group-item">' . $tablas . '</a>';
    }
    ?>

</div>
