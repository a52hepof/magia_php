<?php 
include "maqueta_plugin_tabs.php"; 
?>



<form class="form-horizontal">
    
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"><?php _t("Tabla"); ?></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="" placeholder="" value="<?php echo "$nombrePlugin"; ?>" disabled="">
    </div>
  </div>
    
    
    <?php
    
    
    $i = 1;
    foreach ($resultado as $key => $value) {
        
        
        
        //   echo "<pre>"; 
        //var_dump($resultado);
        //   echo "</pre>"; 

        echo '  <div class="form-group">
    <label for="'.$value['Field'].'" class="col-sm-2 control-label">'.$value['Field'].'</label>
    <div class="col-sm-10">
        <input type="text"  name="'.$value['Field'].'" id="'.$value['Field'].'" class="form-control" id="inputPassword3" placeholder="'.$value['Type'].'">
    </div>
  </div>'; 
/*
        echo "Campo: $key<b>$value[Field]</b><br>";
        echo "Tipo: $value[Type]<br>";
        echo "Null: $value[Null]<br>";
        echo "Key: $value[Key]<br>";
        echo "Defecto: $value[Default]<br>";
        echo "Extra: $value[Extra]<br>";

        echo "<hr>";
*/

        $i++;
    }
    ?>
    

    
    
    
    
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
    
    
</form>


<?php

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










