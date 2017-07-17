<?php 
 /**  
 magia_version: 0.0.8 
 **/
  
  //$test_id = mysql_real_escape_string($_POST['test_id']); 
    $test_nombre = (isset($_POST['test_nombre']))?mysql_real_escape_string($_POST['test_nombre']):null;   
    $test_apellidos = (isset($_POST['test_apellidos']))?mysql_real_escape_string($_POST['test_apellidos']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }