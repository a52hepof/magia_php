 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM reserva_estatus  
 WHERE  
 codigo like '%$reserva_estatus_codigo%'    
 AND  estatus like '%$reserva_estatus_estatus%'    
 AND  orden like '%$reserva_estatus_orden%'    
 ORDER BY id DESC    
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);  
 $total_items = mysql_num_rows(mysql_query("$comando ", $conexion)); 


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }