 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO test ( 
 nombre 
 ,  apellidos 
 ) VALUES ( 
 :nombre 
 ,  :apellidos 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":nombre"=>"$test_nombre" 
 ,  ":apellidos"=>"$test_apellidos" 
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