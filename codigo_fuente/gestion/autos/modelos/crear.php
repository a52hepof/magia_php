 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO autos ( 
 placa 
 ,  id_contacto 
 ,  estatus 
 ) VALUES ( 
 :placa 
 ,  :id_contacto 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":placa"=>"$autos_placa" 
 ,  ":id_contacto"=>"$autos_id_contacto" 
 ,  ":estatus"=>"$autos_estatus" 
             ) 
 ); 


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