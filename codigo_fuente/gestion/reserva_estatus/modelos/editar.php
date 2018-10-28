 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE reserva_estatus SET  
 codigo = '$reserva_estatus_codigo'  
 ,  estatus = '$reserva_estatus_estatus'  
 ,  orden = '$reserva_estatus_orden'  
 WHERE id = '$reserva_estatus_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$reserva_estatus_id"=>"$reserva_estatus_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }