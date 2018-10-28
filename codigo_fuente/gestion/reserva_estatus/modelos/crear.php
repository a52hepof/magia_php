 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO reserva_estatus ( 
 codigo 
 ,  estatus 
 ,  orden 
 ) VALUES ( 
 :codigo 
 ,  :estatus 
 ,  :orden 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":codigo"=>"$reserva_estatus_codigo" 
 ,  ":estatus"=>"$reserva_estatus_estatus" 
 ,  ":orden"=>"$reserva_estatus_orden" 
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