<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
test_id : %test_id%
test_nombre : %test_nombre%
test_apellidos : %test_apellidos%
";

                include "./test/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>