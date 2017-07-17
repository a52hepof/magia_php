<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
  //$test_id = mysql_real_escape_string($_GET['test_id']); 
    $test_nombre = (isset($_GET['test_nombre']))?mysql_real_escape_string($_GET['test_nombre']):null;   
    $test_apellidos = (isset($_GET['test_apellidos']))?mysql_real_escape_string($_GET['test_apellidos']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }