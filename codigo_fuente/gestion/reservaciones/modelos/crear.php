 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO reservaciones ( 
 id_parking 
 ,  placa 
 ,  fecha_i 
 ,  hora_i 
 ,  id_estatus 
 ) VALUES ( 
 :id_parking 
 ,  :placa 
 ,  :fecha_i 
 ,  :hora_i 
 ,  :id_estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_parking"=>"$reservaciones_id_parking" 
 ,  ":placa"=>"$reservaciones_placa" 
 ,  ":fecha_i"=>"$reservaciones_fecha_i" 
 ,  ":hora_i"=>"$reservaciones_hora_i" 
 ,  ":id_estatus"=>"$reservaciones_id_estatus" 
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