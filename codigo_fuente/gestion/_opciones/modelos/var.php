 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
$sql=mysql_query( 
 "SELECT * FROM _opciones WHERE id = '$_opciones_id' ORDER BY id DESC   ",$conexion) 	  
or error(__DIR__, __FILE__, __LINE__);	  
 $_opciones = mysql_fetch_array($sql);	  


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$_opciones_id"=>"$_opciones_id"
                    
                    
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }