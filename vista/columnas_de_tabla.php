<?php
include "header.php"; 
?>




<p>Lista de tablas en la base de datos <b><?php echo "$bdatos"; ?></b>: 

    <a href="index.php?p=plugins_lista"><span class="glyphicon glyphicon-refresh"></span></a>
</p>





<form class="form-horizontal" method="" action="">


    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label"><?php _t('Pluging'); ?></label>
        <div class="col-sm-10">
            <select class="form-control" name="pluging">
                <option value="_opciones">_opciones</option>            
            </select>
        </div>
    </div>


    <div class="form-group">
        <label for="pagina" class="col-sm-2 control-label"><?php _t('Página.'); ?></label>
        <div class="col-sm-10">
            <input 
                type="text" 
                class="form-control" 
                id="pagina" 
                name="pagina"
                placeholder="Una sola palabra">
        </div>
    </div>

    <hr>


    <div class="form-group">
        <label for="ubicacion" class="col-sm-2 control-label"><?php _t('Ubicacion.'); ?></label>
        <div class="col-sm-10">
            <input 
                type="text" 
                class="form-control" 
                id="ubicacion" 
                name="ubicacion"
                placeholder="top, sidebar, etc">
        </div>
    </div>


    <div class="form-group">
        <label for="padre" class="col-sm-2 control-label"><?php _t('Padre.'); ?></label>
        <div class="col-sm-10">
            <input 
                type="text" 
                class="form-control" 
                id="padre" 
                name="padre"
                placeholder="Menu padre">
        </div>
    </div>


    <div class="form-group">
        <label for="label" class="col-sm-2 control-label"><?php _t('Label.'); ?></label>
        <div class="col-sm-10">
            <input 
                type="text" 
                class="form-control" 
                id="label" 
                name="label"
                placeholder="Que nombre usar">
        </div>
    </div>


    <hr>



<?php 
// usuarios y sus permisos por defecto
$grupos = array(
    "root"=>"1111",
    "administradores"=>"1110",
    "invitados"=>"1000",
    "usuarios"=>"1110",
);

foreach ($grupos as $grupo => $permiso) {
    
    $checked_ver    = ($permiso[0])? " checked=\"\" " : "" ;
    $checked_crear  = ($permiso[1])? " checked=\"\" " : "" ;
    $checked_editar = ($permiso[2])? " checked=\"\" " : "" ;
    $checked_borrar = ($permiso[3])? " checked=\"\" " : "" ;
    
    
    
    
    echo '    <div class="form-group">
        <label for="label" class="col-sm-2 control-label">'.$grupo.'</label>
        <div class="col-sm-10">
            
            <label class="checkbox-inline">
                <input type="checkbox" id="ver" value="1" '.$checked_ver.' > '. _tr('Ver.').'
            </label>
            
            <label class="checkbox-inline">
                <input type="checkbox" id="crear" value="1" '.$checked_crear.'> '. _tr('Crear.').'
            </label>
            
            <label class="checkbox-inline">
                <input type="checkbox" id="editar" value="1" '.$checked_editar.'> '. _tr('Editar.').'
            </label>            
            
            <label class="checkbox-inline">
                <input type="checkbox" id="borrar" value="1" '.$checked_borrar.'> '. _tr('Borrar.').'
            </label>
            
        </div>
    </div>'; 
}
?>





    <hr>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default"><?php _t("Crear página"); ?></button>
        </div>
    </div>

</form>




<br>
<br>
<br>
<br>
<br>
<br>














<ul>
    <?php
    echo "<pre>";

    echo var_dump($resultado);
    echo "</pre>";



    $i = 1;
    foreach ($resultado as $key => $value) {
        //   echo "<pre>"; 
        //var_dump($resultado);
        //   echo "</pre>"; 



        echo "Campo: $key<b>$value[Field]</b><br>";
        echo "Tipo: $value[Type]<br>";
        echo "Null: $value[Null]<br>";
        echo "Key: $value[Key]<br>";
        echo "Defecto: $value[Default]<br>";
        echo "Extra: $value[Extra]<br>";

        echo "<hr>";


        $i++;
    }
    /*
      array(12) {
      ["Field"]=>
      string(2) "id"
      [0]=>
      string(2) "id"
      ["Type"]=>
      string(7) "int(11)"
      [1]=>
      string(7) "int(11)"
      ["Null"]=>
      string(2) "NO"
      [2]=>
      string(2) "NO"
      ["Key"]=>
      string(3) "PRI"
      [3]=>
      string(3) "PRI"
      ["Default"]=>
      NULL
      [4]=>
      NULL
      ["Extra"]=>
      string(14) "auto_increment"
      [5]=>
      string(14) "auto_increment"
      }
     *             */
    ?> 
</ul>





<?php
include "footer.php"; 
?>





