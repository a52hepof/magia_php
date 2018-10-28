 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO parkings ( 
 id_contacto 
 ,  direccion 
 ,  numero 
 ,  cpostal 
 ,  barrio 
 ,  comuna 
 ,  ciudad 
 ,  pais 
 ,  precio_hora 
 ,  orden 
 ,  estatus 
 ) VALUES ( 
 :id_contacto 
 ,  :direccion 
 ,  :numero 
 ,  :cpostal 
 ,  :barrio 
 ,  :comuna 
 ,  :ciudad 
 ,  :pais 
 ,  :precio_hora 
 ,  :orden 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_contacto"=>"$parkings_id_contacto" 
 ,  ":direccion"=>"$parkings_direccion" 
 ,  ":numero"=>"$parkings_numero" 
 ,  ":cpostal"=>"$parkings_cpostal" 
 ,  ":barrio"=>"$parkings_barrio" 
 ,  ":comuna"=>"$parkings_comuna" 
 ,  ":ciudad"=>"$parkings_ciudad" 
 ,  ":pais"=>"$parkings_pais" 
 ,  ":precio_hora"=>"$parkings_precio_hora" 
 ,  ":orden"=>"$parkings_orden" 
 ,  ":estatus"=>"$parkings_estatus" 
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