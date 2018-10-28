 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM parkings  
 WHERE  
 id_contacto like '%$parkings_id_contacto%'    
 AND  direccion like '%$parkings_direccion%'    
 AND  numero like '%$parkings_numero%'    
 AND  cpostal like '%$parkings_cpostal%'    
 AND  barrio like '%$parkings_barrio%'    
 AND  comuna like '%$parkings_comuna%'    
 AND  ciudad like '%$parkings_ciudad%'    
 AND  pais like '%$parkings_pais%'    
 AND  precio_hora like '%$parkings_precio_hora%'    
 AND  orden like '%$parkings_orden%'    
 AND  estatus like '%$parkings_estatus%'    
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