



<p>Lista de tablas en la base de datos <b><?php echo "$bdatos"; ?></b>: 
    
    <a href="index.php?p=plugins_lista"><span class="glyphicon glyphicon-refresh"></span></a>
</p>



<form class="form-horizontal">
    
    

    

    


 <?php
            $i = 0;
            $j = 0;
            foreach ($resultado as $reg => $val) {
                echo "<pre>";
                //echo var_dump($va);
                echo "</pre>";      
                $k = 0;
                foreach ($val as $key => $value)
                    echo   '<div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">'.$key.'</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="'.$value.'">
                    </div>
                  </div>'; 
                $k++;

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












    
    
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>

